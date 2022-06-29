<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    //
    use Notifiable;
    
    public static function show()
    {
        return DB::table('cart_items')
                    ->join('products', 'cart_items.product_id', '=', 'products.id')
                    ->get(['cart_items.*', 'products.name', 'products.price', 'products.image_url']);
    }

    public function clear()
    {
        return DB::table('carts')
                    ->where('user_id', Auth::id())->delete();
    }
}
