{{-- table --}}
<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    {{-- !table start --}}
                    <div class="px-4 sm:px-6 lg:px-8">
                        {{-- !validation start --}}
                        @if ($errors->any())
                            <div
                                class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
                                <ul class="list-disc px-4">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- ! validation end --}}

                        {{-- !message start --}}
                        @if (Session::has('status'))
                            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        {{-- !message end --}} {{-- !validation start --}}


                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-xl font-semibold text-gray-900">Product</h1>
                                <p class="mt-2 text-sm text-gray-700">Halaman Product</p>

                            </div>

                            <div class="mt-4 sm:mt-0 sm:ml-5 sm:flex-none">
                                <a href="product"
                                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                                    type="button" data-modal-toggle="staticModal">back to Product</a>
                            </div>
                        </div>

                        <div class="mt-8 flex flex-col">
                            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-300">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                        No</th>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                        Foto Produk</th>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                        Nama</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                        Deskripsi</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                        Harga</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                        Status</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                        Kategori</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                        Mitra</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                        Action</th>

                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white text-center">
                                                @foreach ($products as $product )
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td
                                                        class="whitespace-nowrap px-3 py-4 flex justify-center items-center text-sm sm:pl-6 ">
                                                        <div class="w-32 ">
                                                            <img class=" w-auto rounded-sm"
                                                                src="{{ asset('storage/' . $product->image) }}"
                                                                alt="{{ $product->image }}">

                                                        </div>
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                        <p class="text-gray-900">
                                                            {{ $product->name }}

                                                        </p>

                                                    </td>

                                                    <td
                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                        <p class="text-gray-900">
                                                            {{ $product->description }}
                                                        </p>
                                                    </td>


                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        @currency($product->price)
                                                    </td>


                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        @if ($product->status == 'aktif')
                                                            <span
                                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active
                                                            </span>
                                                        @elseif ($product->status == 'terlaris')
                                                            <span
                                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Best
                                                                Seller
                                                            </span>
                                                        @else
                                                            <span
                                                                class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Non
                                                                Active
                                                            </span>
                                                        @endif

                                                    </td>

                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        @if ($product->kategori == 'halal')
                                                            <span
                                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">halal
                                                            </span>
                                                        @elseif ($product->kategori == 'nonhalal')
                                                            <span
                                                                class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Non
                                                                Halal
                                                            </span>
                                                        @endif

                                                    </td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        NAMA MITRA
                                                    </td>

                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">

                                                        <a href="/products/{{$product->id}}/restore"
                                                            class="text-indigo-600 hover:text-indigo-900">Restore
                                                        </a>

                                                        <a href="/products/{{ $product->id }}/forceDelete"
                                                            class="text-red-600 hover:text-red-900">Delete
                                                        </a>





                                                    </td>
                                                </tr>
                                                @endforeach



                                                <!-- More people... -->
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- !table end --}}

                </div>
            </div>
        </div>



        <!-- Main modal edit-->



    </div>
</x-app-layout>
