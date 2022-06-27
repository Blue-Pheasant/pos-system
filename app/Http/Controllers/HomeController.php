<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function homepage()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function stores()
    {
        $stores = Store::getAll();

        return view('store', ['stores' => $stores]);
    }
}
