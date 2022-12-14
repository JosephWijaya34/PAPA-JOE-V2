<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
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
        return view('admin.mitra', [
            'partner' => Partner::all(),
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
     * @param  \App\Http\Requests\StorePartnerRequest
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnerRequest $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required|max:11',
        //     'location' => 'required|max:11|numeric',
        //     'description' => 'required|max:100',
        //     'phone' => 'required|max:13',
        //     'image_partner' => 'required | mimes:jpeg,jpg,png|max:2048',
        // ]);


        if ($request->file('image_partner') == null) {
            $file = "";
        } else {
            $file = $request->file('image_partner')->store('partnerphotos', 'public');
        }

        $partner = Partner::create(
            [
                'name' => $request->name,
                'location' => $request->location,
                'description' => $request->description,
                'phone' => $request->phone,
                'image_partner' => $file
            ]
        );
        if ($partner) {
            Session::flash('status', 'Success');
            Session::flash('message', 'Add new product success');
        }
        return redirect('/mitra');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return view('mitra', ['partner'=>$partner]);
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
    public function update(UpdatePartnerRequest $request, $id)
    {
        $partner = Partner::findOrFail($id);

        // dd($product->image);

        if ($request->file('image_partner')) {
            // hapus foto produk
            unlink('storage/' . $partner->image_partner);
            // upload foto produk
            $file = $request->file('image_partner')->store('partnerphotos', 'public');
            $partner->update([
                'name' => $request->name,
                'location' => $request->location,
                'description' => $request->description,
                'phone' => $request->phone,
                'image_partner' => $file,
            ]);
        } else {
            $partner->update([
                'name' => $request->name,
                'location' => $request->location,
                'description' => $request->description,
                'phone' => $request->phone,
            ]);
        }


        if ($partner) {
            Session::flash('status', 'Success');
            Session::flash('message', 'Edit product Success');
        }


        return redirect('/mitra');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedMitra = Partner::findOrFail($id);
        // inisialiasi path
        $path = "storage/$deletedMitra->image_partner";

        // hapus foto produk
        if ($deletedMitra->image_partner) {
            if (File::exists($path)) {
                unlink('storage/' . $deletedMitra->image_partner);
            }
        }


        // hapus data produk
        $deletedMitra->delete();

        if ($deletedMitra) {
            Session::flash('status', 'berhasil');
            Session::flash('message', 'Data berhasil dihapus');
        }
        return redirect('/mitra');
    }
}
