<?php

Route::get('/', 'ShowProductsController@index');
Route::get('/product/{id}', 'ShowProductsController@product');
Route::post('/product/add', 'ShowProductsController@addCart');
Route::post('/product/delete', 'ShowProductsController@deleteCart');
Route::get('/cart', 'ShowProductsController@cart');
