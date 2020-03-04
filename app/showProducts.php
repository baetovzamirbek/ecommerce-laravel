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

    public static function checkCart($id)
    {
        return DB::table('cart')->where('product_id', $id)->exists();
    }
}
