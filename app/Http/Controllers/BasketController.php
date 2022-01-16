<?php

    namespace App\Http\Controllers;

    use App\Models\Order;
    use App\Models\Product;
    use Illuminate\Http\Request;


    class BasketController extends Controller {

        public function basket () {
            $orderId = session('orderId');
            if (!is_null($orderId)) {
                $order = Order::findOrFail($orderId);
                return view('basket', compact('order'));
            }
            return null;
        }


        public function order () {
            $orderId = session('orderId');
            if (is_null($orderId)) {
                return redirect(route('index'));
            }
            $order = Order::find($orderId);
            return view('order', compact('order'));
        }


        public function orderConfirm (Request $request) {
            $orderId = session('orderId');
            if (is_null($orderId)) {
                return redirect(route('index'));
            }
            $order = Order::find($orderId);
            $success = $order->saveOrder($request->name, $request->email, $request->phone);
            if ($success) {
                session()->flash('success', 'Ваш заказ принят в обработку');
            } else {
                session()->flash('danger', 'Ошибка добавления заказа');
            }
            return redirect()->route('index');
        }


        public function basketAdd ($productId = null) {
            $orderId = session('orderId');
            if (is_null($orderId)) {
                $order = Order::create();
                session(['orderId' => $order->id]);
            } else {
                $order = Order::find($orderId);
            }
            if ($order->products->contains($productId)) {
                $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                $pivotRow->count++;
                $pivotRow->update();
            } else {
                $order->products()->attach($productId);
            }
            $product = Product::find($productId);
            session()->flash('success', 'Товар "' . $product->name . '" добавлен в корзину');
            return redirect()->route('basket');
        }


        public function basketRemove ($productId) {
            $orderId = session('orderId');
            if (is_null($orderId)) {
                session()->flash('danger', 'Ошибка получения номера заказа');
                return redirect()->route('basket');
            }
            $order = Order::find($orderId);
            $product = Product::find($productId);

            if ($order->products->contains($productId)) {
                $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                if ($pivotRow->count < 2) {
                    $order->products()->detach($productId);
                } else {
                    $pivotRow->count--;
                    $pivotRow->update();
                }
            }

            session()->flash('warning', 'Товар "' . $product->name . '" удален из корзины');

            return redirect()->route('basket');
        }
//
    }
