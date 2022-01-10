@extends('layouts.master')
@section('title', 'Товар')

@section('content')
    <h1>iPhone X 256GB</h1>
    <h2>{{$product}}</h2>
    <p>Цена: <b>89990 ₽</b></p>
    <img src="https://rebro-store.ru/upload/iblock/c7c/c7c844ccd5155142f2562d49fcc462a3.jpg">
    <p>Отличный продвинутый телефон с памятью на 256 gb</p>
    <a class="btn btn-success" href="http:/lara...ru">Добавить в корзину</a>
@endsection

