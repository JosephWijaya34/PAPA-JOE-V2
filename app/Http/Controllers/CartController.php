<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
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
            'transactions' => Transaction::with(['userTransaction', 'products'])->get(),
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

        $transaction =
            Transaction::create(
                [
                    'user_id' => Auth::user()->id,
                    'payment_photo' => $request->price,
                    'description' => $request->description,
                    'status' => $request->status,
                ]
            );


        // attach data ke table
        $product_id = Product::find($request->product_id);
        $transaction->products()->attach($product_id);
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
            if($payment->status == 'cart'){
                $payment->update([
                    'payment_photo' => $request->facebook,
                    'status' => "pending",
                ]);
            }
        }
        
        return redirect('/home');
    }
}
