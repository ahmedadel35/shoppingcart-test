<?php

namespace App\Http\Controllers;

use App\Product;
use Abo3adel\ShoppingCart\CartItem;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'products' => Product::all(),
        ]);
    }
}
