<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home', [
            'product' => Product::get(),
            'partner' => Partner::get(),
            'review' => Review::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $user_id = Auth::user()->id;
        if (!Review::where('user_id', $user_id)->exists()) {
            $review =
                Review::create(
                    [
                        'user_id' => $user_id,
                        'comment' => $request->comment,

                    ]
                );
            if ($review) {
                Session::flash('status', 'success');
                Session::flash('message', 'Add new review success');
            } else {
                Session::flash('status', 'error');
                Session::flash('message', 'Kamu sudah pernah melakukan review');
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd("masuk");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function home_user()
    {
    }

    // menu
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

    // review
    public function store_review_user(Request $request)
    {
        //
        // dd($request->all());

        $user_id = Auth::user()->id;
        if (!Review::where('user_id', $user_id)->exists()) {
            $review =
                Review::create(
                    [
                        'user_id' => $user_id,
                        'comment' => $request->comment,

                    ]
                );

            if ($review) {
                Session::flash('status', 'success');
                Session::flash('message', 'Add new review success');
            }
        } else {
            Session::flash('status', 'error');
            Session::flash('message', 'Kamu sudah pernah melakukan review');
        }
        return redirect('/');
    }
}
