<?php

Route::get('/', 'ShowProductsController@index');
Route::get('/product/{id}', 'ShowProductsController@product');
Route::post('/cart/add', 'ShowProductsController@addCart');
Route::post('/cart/delete', 'ShowProductsController@deleteCart');
Route::post('/cart/update', 'ShowProductsController@updateCart');
Route::get('/cart', 'ShowProductsController@cart');
