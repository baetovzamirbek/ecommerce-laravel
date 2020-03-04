<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class ShowProductsController extends Controller
{
    public function index()
    {
        $all = App\showProducts::getAll('products');
        return view('index',  ['data' => $all]);
    }

    public function product($id)
    {
        $product = App\showProducts::getOne($id);
        $check = App\showProducts::checkCart($id);
        return View('product', ['product' => $product, 'check' => $check]);
    }
}
