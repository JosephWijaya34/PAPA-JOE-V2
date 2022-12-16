@extends('layouts/mainlayouts')
@section('title', 'Cart')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="mt-20">
            <h1 class="font-bold text-4xl">Halaman Pembayaran</h1>
        </div>

        {{$id_product, $price, $quantity}}
      {{-- {{ dd($transactions) }} --}}
      {{-- @foreach ($transactions as $item)
          {{ $item }}
      @endforeach --}}
    </div>
@endsection
