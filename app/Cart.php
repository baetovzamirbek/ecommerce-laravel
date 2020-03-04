<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    public static function addToCart($id)
    {
        DB::table('cart')->insert(['product_id' => $id, 'quantity' => 1]);
    }

    public static function deleteFromCart($id)
    {
        DB::table('cart')->where('product_id', $id)->delete();
    }

    public static function updateCart($id, $status)
    {
        $data = DB::table('cart')->where('product_id', $id)->get();
        if ($status === 'true') {
            $quantity = $data[0]->quantity + 1;
        } else {
            $quantity = $data[0]->quantity - 1;
        }
        DB::table('cart')->where('product_id', $id)->update(['quantity' => $quantity]);
    }
}
