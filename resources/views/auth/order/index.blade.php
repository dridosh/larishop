@extends('.auth.layouts.master')

@section('title', 'Заказы')

@section('content')

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>Заказы</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Имя
                                </th>
                                <th>
                                    Телефон
                                </th>
                                <th>
                                    Когда отправлен
                                </th>
                                <th>
                                    Сумма
                                </th>
                                <th>
                                    Действия
                                </th>
                            </tr>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->created_at->format('H:i d.m.y')}}</td>
                                    <td>{{$order->getfullPrice()}} ₽</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-success" type="button"
                                               href=""
                                            >Открыть</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

