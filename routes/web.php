<?php

    use Illuminate\Support\Facades\Route;


    Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
    Route::get('/basket', 'App\Http\Controllers\MainController@basket')->name('basket');
    Route::get('/order', 'App\Http\Controllers\MainController@order')->name('order');
    Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
    Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
    Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');

