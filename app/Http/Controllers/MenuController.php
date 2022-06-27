<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'product' => $product
        ]);
    }
}
