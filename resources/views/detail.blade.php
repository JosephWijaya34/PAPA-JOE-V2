@extends('layouts/mainlayouts')
@section('title', 'Detail')

@section('content')
    <div class="container mx-auto px-5 py-5">
        <div class="ml-10 mb-5 mr-10">
            <a href="/"><button class="hover:text-red-500 rounded">< Kembali</button></a>
        </div>
        <div class="grid md:grid-cols-2">
            <div class="pl-10 pr-10 pb-10">
                <img class="rounded-md mx-auto" src="/images/tesmakanan.jpeg" alt="Foto Makanan PAPA JOE'S" />
            </div>
            <div class="mr-5 ml-5">
                <H1 class="mb-5 md:text-2xl">Nama Makanan</H1>
                <h3 class="mb-5 md:text-xl">Rp 25.000,00</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam facilis ipsum nulla aspernatur blanditiis
                    vero dolorem possimus laborum provident? Odio corrupti alias eos, fuga error adipisci earum odit! Fuga,
                    id!</p>

                <div class="flex mt-5">
                    <div class="">
                        <button class="bg-green-500 hover:bg-green-800 px-10 py-2 rounded-xl text-center text-white">Beli</button>
                    </div>
                    <div class="ml-5">
                        <button class="bg-white outline outline-1 hover:bg-green-300 hover:text-white px-10 py-2 rounded-xl text-center">+ Keranjang</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
