<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::get();
        return view('admin.product', ['product' => $product]);
        // return view('admin.product',[
        //     'product' => Product::all()
        // ]);
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
        // validate
        $request->validate([
            'name' => 'required|max:11',
            'price' => 'required|max:11|numeric',
            'description' => 'required|max:100',
            'image' => 'required',
        ]);

        // dd($request->all());

        if ($request->file('image') == null) {
            $file = "";
        } else {
            $file = $request->file('image')->store('productphotos', 'public');
        }

        $product = Product::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request->status,
                'image' => $file
            ]
        );

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
        $product = Product::findOrFail($id);

        dd($product->image);


        // if ($request->file('image')) {
        //     unlink('storage/'.$product->image);
        //     $product->update([
        //         'name' => $request->name,
        //         'price' => $request->price,
        //         'description' => $request->description,
        //         'status' => $request->status,
        //         'image' => $request->file('image')->store('productphotos', 'public'),
        //     ]);
        // } else {
        //     $product->update([
        //         'name' => $request->name,
        //         'price' => $request->price,
        //         'description' => $request->description,
        //         'status' => $request->status,
        //     ]);
        // }


        // if ($product) {
        //     Session::flash('status', 'Success');
        //     Session::flash('message', 'Edit product Success');
        // }
        // $product->update($request->all());
        // return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $deletedProduct = Product::findOrFail($id);
        $deletedProduct->delete();

        if ($deletedProduct) {
            Session::flash('status', 'berhasil');
            Session::flash('message', 'Data berhasil dihapus');
        }
        return redirect('/product');
    }
}
