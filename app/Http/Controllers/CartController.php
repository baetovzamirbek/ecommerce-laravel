<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $arr = $request->all();
        $one = App\Cart::addToCart($arr['id']);
    }

    public function deleteCart(Request $request)
    {
        $arr = $request->all();
        App\Cart::deleteFromCart($arr['id']);
    }

    public function cart()
    {
        $arr = [];
        $quant = [];
        $total = 0;
        $all = App\showProducts::getAll('cart');
        foreach ($all as $product) {
            $quantity = $product->quantity;
            $data = App\showProducts::getOne($product->product_id);
            array_push($arr, $data);
            $total = $total + $data->price * $quantity;
            array_push($quant, ['quantity' => $quantity]);
        }
        return View('cart',  ['data' => $arr, 'quantity' => $quant, 'total' => $total]);
    }

    public function updateCart(Request $request)
    {
        $arr = $request->all();
        App\Cart::updateCart($arr['id'], $arr['button']);
    }
}
