<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.review', [
            'review' => Review::with('user')->get(),
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
        // dd($request->all());
        // user yang sedang login
        $user_id = Auth::user()->id;
        
        if (! Review::where('user_id', $user_id)->exists()) {
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
         return redirect('/review');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $reviewUpdate = Review::findOrFail($id);
        $reviewUpdate->update([
            'status' => $request->status,
        ]);
        if ($reviewUpdate) {
            Session::flash('status', 'success');
            Session::flash('message', 'Update review success');
        }
        return redirect('/review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deletedReview = Review::findOrFail($id);
        // hapus data produk
        $deletedReview->delete();
        if ($deletedReview) {
            Session::flash('status', 'error');
            Session::flash('message', 'Delete review success');
        }
        return redirect('/review');

    }
}
