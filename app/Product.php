<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image_url', 'category_id'];


    public static function getAll()
    {
        return DB::table('products')->paginate(18);
    }

    public static function show($id)
    {
        return DB::table('products')->find($id);
    }
}
