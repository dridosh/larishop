@extends('layouts.master')
@section('title','Оформить заказ')

@section('content')
    <h1>Подтвердите заказ:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>Общая стоимость: <b>{{$order->getfullPrice()}} ₽.</b></p>
            <form action="{{route('order-confirm')}}" method="POST">
                <div>
                    <p>Укажите свои имя, номер телефона и email, чтобы наш менеджер связался с Вами:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control" placeholder="Имя" >
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер
                                                                                              телефона: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control" placeholder="Номер телефона">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="email" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                            <div class="col-lg-4">
                                @csrf
                                <input type="text" name="email" id="email" value="" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <br>
                     <input
                        type="submit" class="btn btn-success" value="Подтвердите заказ">
                </div>
            </form>
        </div>
    </div>
@endsection
