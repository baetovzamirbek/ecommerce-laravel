<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class ShowProductsController extends Controller
{
    public function index()
    {
        $all = App\showProducts::getAll();
        return view('index',  ['data' => $all]);
    }

    public function product($id)
    {
        $single = App\showProducts::getOne($id);
        $check = App\showProducts::checkCart($id);
        return View('product', ['product' => $single, 'check' => $check]);
    }

    public function addCart(Request $request)
    {
        $arr =$request->all();
        $one = App\showProducts::addToCart($arr['id']);        
    }

    public function cart()
    {
        return View('cart');
    }
}
