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
        $single = App\showProducts::getOne($id);
        $check = App\showProducts::checkCart($id);
        return View('product', ['product' => $single, 'check' => $check]);
    }

    public function addCart(Request $request)
    {
        $arr = $request->all();
        $one = App\showProducts::addToCart($arr['id']);
    }
    public function deleteCart(Request $request)
    {
        $arr = $request->all();
        App\showProducts::deleteFromCart($arr['id']);
    }
    public function cart()
    {
        $arr = [];
        $quant = [];
        $total = 0;
        $all = App\showProducts::getAll('cart');
        foreach ($all as $product) {
            $id = $product->product_id;
            $quantity = $product->quantity;
            $data = App\showProducts::getOne($id);
            array_push($arr, $data);
            $total = $total + $data->price * $quantity;
            array_push($quant, ['quantity' => $quantity]);
        }
        return View('cart',  ['data' => $arr, 'quantity' => $quant, 'total' => $total]);
    }
}
