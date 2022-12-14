@extends('layouts/mainlayouts')
@section('title', 'Detail')

@section('content')

    <div class="container mx-auto px-5 py-5">
        <div class="ml-10 mb-5 mr-10 my-auto">
            <a href="/"><button class="hover:text-red-500 rounded font-bold text-lg">
                    <iconify-icon icon="material-symbols:arrow-back-ios-rounded"></iconify-icon> Kembali
                </button></a>
        </div>
        <div class="grid md:grid-cols-2">
            <div class="pl-10 pr-10 pb-10">
                <img class="rounded-md mx-auto" src="{{ asset('storage/' . $product->image) }}" alt="Foto Makanan PAPA JOE'S" />
            </div>
            <div class="mr-5 ml-5">
                <H1 class="mb-5 font-bold md:text-3xl">{{ $product->name }}</H1>
                <h3 class="mb-5 md:text-xl">@currency($product->price)</h3>
                <p>{{ $product->description }}</p>

                <div class="flex mt-5">
                    <div class="">
                        <button
                            class="bg-green-500 hover:bg-green-800 px-10 py-2 rounded-md text-center text-white">Beli</button>
                    </div>
                    <div class="ml-5">
                        <button
                            class="bg-white outline outline-1 hover:bg-green-500 hover:text-white px-10 py-2 rounded-md text-center">+
                            Keranjang</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
