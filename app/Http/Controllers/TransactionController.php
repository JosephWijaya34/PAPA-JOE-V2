<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.transaksi', [
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // //
        $transaction = Transaction::findOrFail($id);

        $transaction->update([
            'status' => $request->status,
        ]);
        if ($transaction) {
            Session::flash('status', 'Success');
            Session::flash('message', 'Edit transaction Success');
        }
        return redirect('/transaksi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }


    public function history()
    {
        //
        return view('history', [
            'transactions' => Transaction::with(['userTransaction', 'products'])->get(),
        ]);
    }


    // public function insertDataCart(Request $request){
    //     $user_id = Auth::user()->id;
    //     $cart =
    //     Transaction::create(
    //         [
    //             'payment_photo' => $request->name,
    //             'status' => $request->price,
    //             'user_id' => $user_id,
    //         ]

    //     );
    // }


}
