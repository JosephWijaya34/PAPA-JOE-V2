<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**{{  }}
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response{{  }}
     */
    public function index()
    {
        //
        return view('cart', [
            'transactions' => Transaction::with(['userTransaction', 'products'])->distinct()->get(),
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
        $deletedCart = Transaction::findOrFail($id);
        $deletedCart->delete();

        return redirect('/cart');
    }

    // cart
    public function redirectCart(Request $request)
    {

        // dd(request()->all());
        $cart = Transaction::where('user_id', Auth::user()->id)->where('status', 'cart')->exists();
        $product = TransactionProduct::where('product_id', $request->product_id)->exists();

        if ($cart && $product) {
            $cart = Transaction::where('user_id', Auth::user()->id)->where('status', 'cart')->firstOrFail();
            $cart->products()->updateExistingPivot($request->product_id, ['quantity' => $request->quantity]);
        } else {
            if ($cart) {
                $cart = Transaction::with('products')->where('user_id', Auth::user()->id)->where('status', 'cart')->first();
                $cart->products()->attach($request->product_id, ['quantity' => $request->quantity]);
            } else {
                $cart =
                    Transaction::create(
                        [
                            'user_id' => Auth::user()->id,
                            'payment_photo' => null,
                            'description' => $request->description,
                            'status' => $request->status,
                        ]
                    );
                $product_id = Product::find($request->product_id);
                $cart->products()->attach($product_id, ['quantity' => $request->quantity]);
            }
        }
        // $cart = Transaction::with('products')->where('user_id', Auth::user()->id)->where('status', 'cart')->first();
        // $cart->products()->attach($request->product_id, ['quantity' => 1]);



        // // attach data ke table

        return redirect('/cart');
    }
    // transaction
    public function showDetailPayment(Request $request)
    {
        dd($request->all());
        return view('beli', [
            'totalHarga' => $request->totalHarga,
            'transactions' => Transaction::with(['userTransaction', 'products'])->get(),

        ]);
    }

    // public function paymentProses(Request $request, $id )
    public function paymentProses(Request $request)
    {
        //
        foreach ($request->idTransaction as $id) {
            $payment = Transaction::findOrFail($id);
            if ($payment->status == 'cart') {
                $payment->update([
                    'payment_photo' => $request->facebook,
                    'status' => "pending",
                ]);
            }
        }
        return redirect('/home');
    }
}
