<?php

Route::get('/', 'ShowProductsController@index');
Route::get('/product/{id}', 'ShowProductsController@product');
Route::post('/product/add', 'ShowProductsController@addCart');
Route::get('/cart', 'ShowProductsController@cart');