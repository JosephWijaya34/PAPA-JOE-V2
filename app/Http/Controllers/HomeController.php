<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Partner;

class HomeController extends Controller{
    public function menu_user(Request $request)
    {
        $keyword = $request->keyword;

        if (request()->has('tipe')) {
            if (request()->input('tipe', 'halal') === 'halal') {
                $produk = Product::where('kategori', 'LIKE', 'halal')->paginate(5);
            } else if (request()->input('tipe', 'nonhalal') === 'nonhalal') {
                $produk = Product::where('kategori', 'LIKE', 'nonhalal')->paginate(5);
            }
        } else if ($request->has('keyword')) {
            $produk = Product::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('price', 'like', '%' . $keyword . '%')->orWhere('status', 'like', '%' . $keyword . '%')->paginate(5);
        } else {
            $produk =  Product::paginate(5);
        }

        return view('menu', [
            'product' => $produk
        ]);
    }

    public function home_user(){
        return view('home', [
            'product' => Product::get(),
            'partner' => Partner::get()
        ]);
    }
}