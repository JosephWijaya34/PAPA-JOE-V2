<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        if ($request->has('keyword')) {
            return view('admin.product', [
                'product' => Product::with('partners')->where('name', 'LIKE', '%' . $keyword . '%')->orWhere('price', 'like', '%' . $keyword . '%')->orWhere('status', 'like', '%' . $keyword . '%')->paginate(5),
                'partners' => Partner::all(),
            ]);
        } else {
            return view('admin.product', [
                'product' => Product::with('partners')->paginate(5),
                'partners' => Partner::all(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //
        $product = new Product;
        $product->name = 'sushi';
        $product->price = 40;
        $product->description = "mantap";
        $product->status = "aktif";
        $product->kategori = "halal";
        $product->image = "tes.jpg";


        $product->save();

        $partner = Partner::find(1);
        $product->partners()->attach($partner);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->mitra);
        // // validate
        // $request->validate([
        //     'name' => 'required|max:11',
        //     'price' => 'required|digits_between:2,11|numeric',
        //     'description' => 'required|max:100',
        //     'image' => 'required | mimes:jpeg,jpg,png|max:2048',
        // ]);

        // // dd($request->all());

        if ($request->file('image') == null) {
            $file = "";
        } else {
            $file = $request->file('image')->store('productphotos', 'public');
        }


        $product =
            Product::create(
                [
                    'name' => $request->name,
                    'price' => $request->price,
                    'description' => $request->description,
                    'status' => $request->status,
                    'kategori' => $request->kategori,
                    'image' => $file,
                ]
            );
        foreach ($request->mitra as $mitra) {
            // attach data ke table
            $partner = Partner::find($mitra);
            $product->partners()->attach($partner);
        }

        if ($product) {
            Session::flash('status', 'Success');
            Session::flash('message', 'Add new product success');
        }
        return redirect('/product');
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
        $product = Product::findOrFail($id);
        return view('detail', ['product' => $product]);
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
        // dd($request->all());
        //
        $product = Product::findOrFail($id);
        // validate
        $request->validate([
            'name' => 'required|max:11',
            'price' => 'required|digits_between:2,11|numeric',
            'description' => 'required|max:100',
            'image' => 'mimes:jpeg,jpg,png|max:2048',
        ]);
        // dd($product->image);

        if ($request->file('image')) {
            // hapus foto produk
            unlink('storage/' . $product->image);
            // upload foto produk
            $file = $request->file('image')->store('productphotos', 'public');
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request->status,
                'kategori' => $request->kategori,
                'image' => $file,
            ]);
            // attach data ke table
            $id = $request->mitra;
            $attributes = ['id_partner', $request->mitra];
            $product->partners()->updateExistingPivot($id, $attributes);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request->status,
                'kategori' => $request->kategori,

            ]);

            
            if($request->mitra){
                foreach ($request->mitra as $mitra) {
                    $partner = Partner::find($mitra);
                    if(!$product->partners()->where('id_partner', $mitra)->exists()){
                        $product->partners()->attach($partner);
                    }
    
                    foreach ($product->partners as $partner) {
                        if(!in_array($partner->id, $request->mitra)){
                            $product->partners()->detach($partner->id);
                        }
                    }
    
                    
                }
            } else {
                foreach ($product->partners as $partner) {
                    $product->partners()->detach($partner->id);
                }
            }
            
            // attach data ke table
            // $id = $request->mitra;
            // $attributes = ['id_partner', $request->mitra];
            // $product->partners()->updateExistingPivot($id, $attributes);
        }

        if ($product) {
            Session::flash('status', 'Success');
            Session::flash('message', 'Edit product Success');
        }

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedProduct = Product::findOrFail($id);
        // inisialiasi path
        $path = "storage/$deletedProduct->image";

        // hapus foto produk
        if ($deletedProduct->image) {
            if (File::exists($path)) {
                unlink('storage/' . $deletedProduct->image);
            }
        }
        // hapus data produk
        $deletedProduct->delete();

        if ($deletedProduct) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete product success');
        }
        return redirect('/product');
    }
}
