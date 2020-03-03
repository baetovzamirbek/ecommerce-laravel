<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class showProducts extends Model
{
    public static function getAll($table)
    {
        $data = DB::table($table)->get();
        return $data;
    }

    public static function getOne($id)
    {
        $data = DB::table('products')->find($id);
        return $data;
    }

    public static function addToCart($id)
    {
        DB::table('cart')->insert(['product_id' => $id, 'quantity' => 1]);
    }

    public static function checkCart($id)
    {
        return DB::table('cart')->where('product_id', $id)->exists();
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
