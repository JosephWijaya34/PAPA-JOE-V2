@extends('layouts/mainlayouts')
@section('title', 'Detail')

@section('content')

    <div class="container mx-auto px-5 py-5">
        <div class="ml-10 mb-5 mr-10 my-auto">
            <a href="/"><button class="hover:text-red-500 rounded font-bold text-lg">
                    <iconify-icon icon="material-symbols:arrow-back-ios-rounded"></iconify-icon> Kembali
                </button></a>
        </div>
        {{-- {{ $products }} --}}
        <div class="grid md:grid-cols-2">
            <div class="pl-10 pr-10 pb-10">
                <img class="rounded-md mx-auto" src="{{ asset('storage/' . $products->image) }}"
                    alt="Foto Makanan PAPA JOE'S" />
            </div>
            <div class="mr-5 ml-5">
                <H1 class="mb-5 font-bold md:text-3xl">{{ $products->name }}</H1>
                <h3 class="mb-5 md:text-xl">@currency($products->price)</h3>
                <p>{{ $products->description }}</p>
                <div class="flex mt-5">

                    @guest

                        <div class="">
                            <a href="https://api.whatsapp.com/send?phone={{ $socials[0]['social'] }}&text=Halo,%20saya%20ingin%20bertanya%20seputar%20produk%20{{ $products->name }}"
                                target="_blank"
                                class="bg-green-500 hover:bg-green-800 px-10 py-2 rounded-md text-center text-white">Beli</a>
                        </div>
                        <div class="ml-5">
                            <a href="/login"
                                class="bg-white outline outline-1 hover:bg-green-500 hover:text-white px-10 py-2 rounded-md text-center">+
                                Keranjang</a>
                        </div>
                    @endguest
                    @auth
                    <form action="{{ route('cart-store') }}" method="POST">
                        @csrf
                        <div class="flex">
                        <div class="my-auto mr-5">
                            <input name="quantity" value="1" placeholder="1"
                                class=" block w-14 p-2 text-gray-900 border border-papa-merah-100 rounded-lg bg-gray-50 sm:text-xs focus:ring-papa-merah-200 focus:border-paparing-papa-merah-200 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-papa-merah-200 dark:focus:border-paparing-papa-merah-200"
                                type="number" min="1" >
                        </div>
                        <div class="">
                            <button
                                class="bg-green-500 hover:bg-green-800 px-10 py-2 rounded-md text-center text-white">Beli</button>
                        </div>
                            <div class="ml-5">
                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="status" value="cart">
                                <button type="submit"
                                    class="bg-white outline outline-1 hover:bg-green-500 hover:text-white px-10 py-2 rounded-md text-center md:text-sm">
                                    Keranjang</button>
                            </div>
                        {{-- </div> --}}
                        </form>
                    @endauth
                </div>

            </div>
        </div>
    </div>
@endsection
