<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $itemModel = new CartItem(
            $request->input("product_id"), 
            $request->input("size"),
            $request->input("note"),
            $request->input("quantity"),
        ); 

        $itemModel->save();
        return Redirect::back()->with('message', true);
    }

    public function remove(Request $request)
    {
        CartItem::remove($request->input('cart_item_id'));
        return Redirect::back()->with('message_1', true);
    }

    public function clear()
    {

    }

    public function show()
    {
        $items = Cart::show();

        return view('cart', [
            'items' => $items
        ]);
    }

    public static function edit(Request $request)
    {
        $items = array( 
            'id' => $request->input("cart_item_id"),
            'product_id' => $request->input("product_id"), 
            'size' => $request->input("size"), 
            'note' => $request->input("note"), 
            'quantity' => $request->input("quantity")
        );

        $itemModel = new CartItem(
            $request->input("cart_item_id"), 
            $request->input("product_id"), 
            $request->input("size"),
            $request->input("note"),
            $request->input("quantity"),
        );                         

        $itemModel->edit($items);
        return Redirect::back()->with('message_2', true);
    }
}
