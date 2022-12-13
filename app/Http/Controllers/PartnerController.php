<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mitra',[
            'partners' => Partner::all(),
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
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnerRequest $request)
    {
        $request->validate([
            'name' => 'required|max:11',
            'location' => 'required|max:11|numeric',
            'description' => 'required|max:100',
            'status' => 'required|max:50',
            'phone' => 'required|max:13',
            'image_partner' => 'required | mimes:jpeg,jpg,png|max:2048',
        ]);

        // dd($request->all());

        if ($request->file('image_partner') == null) {
            $file = "";
        } else {
            $file = $request->file('image_partner')->store('productphotos', 'public');
        }

        $partner = Partner::create(
            [
                'name' => $request->name,
                'location' => $request->location,
                'description' => $request->description,
                'status' => $request->status,
                'phone' => $request->phone,
                'image_partner' => $file
            ]
        );
        if ($partner) {
            Session::flash('status', 'Success');
            Session::flash('message', 'Add new product success');
        }
        return redirect('/product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
