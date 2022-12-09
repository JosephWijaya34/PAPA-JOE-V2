@extends('layouts/mainlayouts')
@section('title', 'Cart')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="mt-20">
            <h1 class="font-bold text-4xl">Keranjang Makanan</h1>
        </div>

        {{-- card makan cart start --}}
        <div id="cartMakanan">
            <div class="mt-10">
                <div class="grid grid-cols-2 md:grid-cols-6">
                    <div class="col-span-2">
                        <img class="rounded-xl" src="/images/tesmakanan.jpeg" alt="Foto Makanan">
                    </div>
                    <div class="col-span-2 text-center mt-10 md:ml-10 md:my-auto">
                        <h1 class="font-normal text-3xl">Sushi Salmon</h1>
                    </div>
                    <div class="col-span-2 flex justify-center md:justify-start md:col-span-1 md:mx-auto mt-10 md:my-auto">
                        <input
                            class="block w-14 p-2 text-gray-900 border border-papa-merah-100 rounded-lg bg-gray-50 sm:text-xs focus:ring-papa-merah-200 focus:border-paparing-papa-merah-200 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-papa-merah-200 dark:focus:border-paparing-papa-merah-200"
                            type="number" min="1" value="1">
                    </div>
                    <div class="col-span-2 flex flex-row md:col-span-1 justify-center mt-10 md:my-auto">
                        <h1 class="font-bold md:font-normal text-xl md:text-2xl">Rp. 20.000</h1>
                        <button type="button"
                            class="mx-5 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-2 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                    </div>
                </div>
            </div>
            <div class="border border-y-slate-800 my-5"></div>
        </div>
        {{-- card makan cart end --}}

        {{-- total harga --}}
        <div class="flex justify-center my-auto md:justify-end mb-5 md:mr-10">
          <span class="text-lg md:text-2xl mr-2">Total :</span><span class="text-lg md:text-2xl">Rp.100.000,00</span>
        </div>

        {{-- button Proses --}}
        <div class="flex justify-center">
            <button type="button"
                class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-2xl text-xl px-14 py-2 md:text-2xl md:px-40 md:py-3 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Proses</button>
        </div>

    </div>
@endsection
