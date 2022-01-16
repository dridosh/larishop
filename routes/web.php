<?php

    use Illuminate\Support\Facades\Route;


    Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
    Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
    Route::get('/basket/order', 'App\Http\Controllers\MainController@order')->name('order');
    Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
    Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');


    Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');

    Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
    Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');



