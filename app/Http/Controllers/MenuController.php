<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function menu()
    {
        $products = Product::getAll();

        return view('menu', [
            'products' => $products
        ]);
    }

    public function detail($id)
    {
        $product = Product::show($id);

        return view('product_detail', [
            'product' => $product,
            'product_id' => $id
        ]);
    }

    public function category($id)
    {
        $products = Product::getByCategory($id);

        return view('menu', [
            'products' => $products
        ]);
    }

    public function search(Request $request)
    {
        $products = Product::search($request->input("keyword"));

        return view('menu', [
            'products' => $products
        ]);
    }
}
