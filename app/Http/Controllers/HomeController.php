<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Partner;

class HomeController extends Controller{
    public function menu_user(){
        return view('menu', [
            'product' => Product::get()
        ]);
    }

    public function home_user(){
        return view('home', [
            'product' => Product::get(),
            'partner' => Partner::get()
        ]);
    }
}
