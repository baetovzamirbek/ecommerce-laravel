<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class showProducts extends Model
{
     public static function getAll()
    {
        $data = DB::table('products')->get();
        return $data;
    }

    public static function getOne($id)
    {
        $data = DB::table('products')->find($id);
        return $data;
    }

    public static function addToCart($id)
    {
        DB::table('cart')->insert(['product_id' => $id]);
    }

    public static function checkCart($id)
    {
        return DB::table('cart')->where('product_id', $id)->exists();
    }
}
