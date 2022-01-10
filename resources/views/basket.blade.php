@extends('layouts.master')
@section('title', 'Корзина')

@section('content')
    <p class="alert alert-success">Добавлен товар iPhone X 64GB</p>
    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="/mobiles/iphone_x_64">
                            <img height="56px" src="https://rebro-store.ru/upload/iblock/c7c/c7c844ccd5155142f2562d49fcc462a3.jpg">
                            iPhone X 64GB
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="https://internet-shop.tmweb.ru/basket/remove/1" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="4Okp8MyrUHb9tAsjrGFDiy6IXirZQIeq5su35KUK">
                            </form>
                            <form action="/basket/add/1" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="4Okp8MyrUHb9tAsjrGFDiy6IXirZQIeq5su35KUK">
                            </form>
                        </div>
                    </td>
                    <td>71990 ₽</td>
                    <td>71990 ₽</td>
                </tr>
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>71990 ₽</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="/basket/order">Оформить
                                                                                                        заказ</a>
        </div>
    </div>
@endsection
