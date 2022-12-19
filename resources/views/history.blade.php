@extends('layouts/mainlayouts')
@section('title', 'histori')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:pb-24 lg:px-8">
            <div class="max-w-xl">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Order history</h1>
                <p class="mt-2 text-sm text-gray-500">History makanan yang pernah dibeli.</p>
            </div>

            <div class="mt-16">
                <h2 class="sr-only">Recent orders</h2>

                <div class="space-y-20">
                    <div>
                        <h3 class="sr-only">Order placed on <time datetime="2021-01-22">January 22, 2021</time></h3>

                        {{-- {{ $transactions }} --}}
                        <table class="mt-4 w-full text-gray-500 sm:mt-6">
                            <caption class="sr-only">
                                Products
                            </caption>
                            <thead class="sr-only text-sm text-gray-500 text-left sm:not-sr-only">
                                <tr>
                                    <th scope="col" class="sm:w-2/5 lg:w-1/3 pr-8 py-3 font-normal">Nama Produk</th>
                                    <th scope="col" class="sm:w-2/5 lg:w-1/3 pr-8 py-3 font-normal">Harga(satuan)</th>
                                    <th scope="col" class="hidden w-1/5 pr-8 py-3 font-normal sm:table-cell">Jumlah</th>
                                    <th scope="col" class="hidden pr-8 py-3 font-normal sm:table-cell">Status</th>
                                    <th scope="col" class="w-0 py-3 font-normal text-center">Total Harga</th>
                                </tr>
                            </thead>
                            @foreach ($transactions as $transactionCart)
                                @if (Auth::user()->id == $transactionCart->user_id)
                                    @if ($transactionCart->status == 'paid' || $transactionCart->status == 'done')
                                        @foreach ($transactionCart->products as $product)
                                            <tbody
                                                class="border-b border-gray-200 divide-y divide-gray-200 text-sm sm:border-t">
                                                <tr>

                                                    <td class="py-6 pr-8">
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                                alt="foto {{ $product->name }}"
                                                                class="w-16 h-16 object-center object-cover rounded mr-6">
                                                            <div>
                                                                <div class="font-medium text-gray-900">{{ $product->name }}
                                                                </div>
                                                                <div class="mt-1 sm:hidden">{{ $product->pivot->quantity }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="hidden py-6 pr-8 sm:table-cell">@currency($product->price)</td>
                                                    <td class="hidden py-6 pr-8 sm:table-cell">
                                                        {{ $product->pivot->quantity }}</td>
                                                    <td class="hidden py-6 pr-8 sm:table-cell">
                                                        {{-- {{ $transactionCart->status }} --}}
                                                        @if ($transactionCart->status == 'cart')
                                                            <span
                                                                class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Cart
                                                            </span>
                                                        @elseif ($transactionCart->status == 'paid')
                                                            <span
                                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Paid

                                                            </span>
                                                        @elseif ($transactionCart->status == 'done')
                                                            <span
                                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Done

                                                            </span>
                                                        @endif

                                                    </td>
                                                    <td class="py-6 pr-8 font-medium  whitespace-nowrap">
                                                        {{-- <a href="#" class="text-indigo-600">View<span
                                                                class="hidden lg:inline">
                                                                Product</span><span class="sr-only">, Machined Pen and
                                                                Pencil Set</span></a> --}}
                                                        <?php
                                                        $totalHarga = 0;
                                                        $totalHarga += $product->price * $product->pivot->quantity; ?>

                                                        @currency($totalHarga)
                                                    </td>
                                                </tr>

                                                <!-- More products... -->
                                            </tbody>
                                        @endforeach
                                        @else
                                        @php
                                        
                                        Session::flash('status', 'error');
                                        Session::flash('message', 'Kamu tidak memiliki histori pembelian');
                                    @endphp
                                    <script>
                                        window.location = "/";
                                    </script>
                                    @endif
                                
                                   
                                @endif
                            @endforeach
                        </table>
                    </div>

                    <!-- More orders... -->
                </div>
            </div>
        </div>
    </div>


@endsection
