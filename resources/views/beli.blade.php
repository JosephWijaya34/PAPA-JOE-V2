@extends('layouts/mainlayouts')
@section('title', 'Cart')

@section('content')
    @foreach ($transactions as $data)
        @if (Auth::user()->id == $data->user_id)
            {{-- <form action="{{ route('cart-payment', $data->id) }}" method="POST"> --}}
            {{ $data->id }}
        @endif
    @endforeach
    <form action="{{ route('cart-payment') }}" method="POST">

        @foreach ($transactions as $data)
            @if (Auth::user()->id == $data->user_id)
              <input type="hidden" name="idTransaction[]" value="{{$data->id}}">
            @endif
        @endforeach
        @csrf
        <div class="container mx-auto px-4  ">
            <div class="mt-20">
                <h1 class="font-bold text-2xl text-center md:text-left md:text-4xl">Halaman Pembayaran</h1>
            </div>
            <div class="text-center mt-8">
                <h1 class="text-2xl font-bold">Total</h1>
                <p class="text-lg">@currency($totalHarga)</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis esse eligendi suscipit deserunt
                    omnis
                    explicabo odit dolores eum. Voluptate voluptates suscipit natus sunt ducimus quo velit. Voluptate ea
                    quis
                    numquam reprehenderit. Vitae, in aut? Nesciunt cumque veniam, dolorum error cupiditate iusto.
                    Accusantium at
                    excepturi numquam, optio maiores distinctio. Esse sit, ex delectus quibusdam libero pariatur rem
                    deleniti
                    itaque
                    et architecto voluptatum vel nobis aspernatur iste provident obcaecati alias accusantium eveniet quae
                    velit
                    dolore sunt aliquid doloremque voluptatem. Nobis incidunt velit porro repellat? Architecto, ipsa dicta
                    ad
                    eum
                    modi tempora eveniet cumque vero, nesciunt atque, harum quis fugiat error beatae fugit.</p>

                <label class="block mt-5 mb-2 text-2xl font-bold text-gray-900 dark:text-white" for="file_input">Upload Bukti
                    Pembayaran</label>
                <input name="paymment_photo"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file">

                <button type="submit"
                    class="mt-5 focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-md text-xl px-14 py-2 md:text-2xl md:px-40 md:py-3 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Bayar</button>
            </div>

        </div>
    </form>

@endsection
