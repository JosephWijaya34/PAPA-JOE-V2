@extends('layouts/mainlayouts')
@section('title', 'Cart')

@section('content')
    @auth
        <?php $totalHarga = 0; ?>
        <div class="container mx-auto px-4 py-12 ">
            {{-- card makan cart start --}}
            <div class="mt-10">
                <h1 class="font-bold text-4xl">Keranjang Makanan</h1>
            </div>

            <form action="{{ route('cart-redirect') }}" method="POST">
                @csrf
                @foreach ($transactions as $transactionCart)
                    @if ($transactionCart->status == 'cart' && Auth::user()->id == $transactionCart->user_id)
                        @foreach ($transactionCart->products as $product)
                            {{-- {{ $transactionCart->products->name}} --}}
                            <div id="cartMakanan">
                                <div class="mt-10">
                                    <div class="grid grid-cols-2 md:grid-cols-6">
                                        <div class="col-span-2">
                                            <img class="rounded-xl" src="/images/tesmakanan.jpeg" alt="Foto Makanan">
                                        </div>
                                        <div class="col-span-2 text-center mt-10 md:ml-10 md:my-auto">
                                            <h1 class="font-normal text-3xl">{{ $product->name }}</h1>
                                            <input type="hidden" name="product_id[]" value="{{ $product->id }}">

                                        </div>
                                        <div
                                            class="col-span-2 flex justify-center md:justify-start md:col-span-1 md:mx-auto mt-10 md:my-auto">
                                            <input name="quantity[]"
                                                class="block w-14 p-2 text-gray-900 border border-papa-merah-100 rounded-lg bg-gray-50 sm:text-xs focus:ring-papa-merah-200 focus:border-paparing-papa-merah-200 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-papa-merah-200 dark:focus:border-paparing-papa-merah-200"
                                                type="number" min="1" value="">
                                        </div>
                                        <div class="col-span-2 flex flex-row md:col-span-1 justify-center mt-10 md:my-auto">
                                            <h1 class="font-bold md:font-normal text-xl md:text-2xl">@currency($product->price)</h1>
                                            <a href="/cart-delete/{{ $transactionCart->id }}"
                                                class="mx-5 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-2 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                                        </div>

                                        {{-- total harga --}}
                                        <?php $totalHarga += $product->price; ?>
                                        <input type="hidden" name="totalHarga" value="{{ $totalHarga }}">

                                    </div>
                                </div>
                                <div class="border border-y-slate-800 my-5"></div>
                        @endforeach
                        {{-- @else
                    <div class="min-h-full pt-16 pb-12 flex flex-col bg-white">
                        <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="flex-shrink-0 flex justify-center">
                            </div>
                            <div class="py-16">
                                <div class="text-center">
                                    <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                                        Keranjang
                                        Kamu Kosong !</h1>
                                    <p class="mt-2 text-base text-gray-500">Ayo Tambah Produk Dulu</p>
                                    <div class="mt-6">
                                        <a href="/"
                                            class="text-base font-medium text-indigo-600 hover:text-indigo-500">Kembali<span
                                                aria-hidden="true"> &rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </main>

                    </div> --}}
                    @endif
                @endforeach
                {{-- button Proses --}}

                <div class="flex justify-center">

                    <button type="submit"
                        class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-2xl text-xl px-14 py-2 md:text-2xl md:px-40 md:py-3 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Proses</button>
                    {{-- <a href="/cart-redirect"
                    class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-md text-xl px-14 py-2 md:text-2xl md:px-40 md:py-3 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Proses</a> --}}

                </div>
            </form>
        </div>
    </div>
        {{-- card makan cart end --}}
        {{-- total harga --}}
        <div class="flex justify-center my-auto md:justify-end mb-5 md:mr-10">
            <span class="text-lg md:text-2xl mr-2">Total :</span><span class="text-lg md:text-2xl">
                @currency($totalHarga)
            </span>
        </div>

        </div>
        </div>

    @endauth
@endsection
