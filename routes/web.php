<?php

Route::get('/', 'ShowProductsController@index');
Route::get('/product/{id}', 'ShowProductsController@product');
Route::post('/cart/add', 'CartController@addCart');
Route::post('/cart/delete', 'CartController@deleteCart');
Route::post('/cart/update', 'CartController@updateCart');
Route::get('/cart', 'CartController@cart');
