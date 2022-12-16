{{-- table --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Social Media') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">


                        {{-- !table start --}}
                        <div class="px-4 sm:px-6 lg:px-8">
                            {{-- !validation start --}}


                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-xl font-semibold text-gray-900">Transaksi</h1>
                                    <p class="mt-2 text-sm text-gray-700">Halaman Pengaturan Transaksi User</p>
                                </div>
                                

                            </div>
                            

                            <div class="mt-8 flex flex-col">
                                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div
                                            class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                            No</th>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                            Nama</th>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                            Tanggal</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            No Telpon</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Email</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Status</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Total Harga</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white text-center">
                                                  
                                                    @foreach ($transactions as  $transaction)
                                                     
                                                    
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                            <p class="text-gray-900">
                                                                {{ $loop->iteration }}
                                                            </p>

                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                            <p class="text-gray-900">
                                                                {{ $transaction->userTransaction->created_at->format('d M Y') }}
                                                            </p>

                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                            <p class="text-gray-900">
                                                                {{ $transaction->userTransaction->name }}
                                                            </p>

                                                        </td>

                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                            <p class="text-gray-900">
                                                                {{ $transaction->userTransaction->telphone }}
                                                            </p>

                                                        </td>

                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                            <p class="text-gray-900">
                                                                {{ $transaction->userTransaction->email }}
                                                            </p>

                                                        </td>
                                                        
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24"">
                                                            @if ($transaction->status == 'notpaid')
                                                                <span
                                                                    class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active
                                                                </span>
                                                            @elseif ($transaction->status == 'paid')
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
                                                        
                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                            <p class="text-gray-900">
                                                                @foreach ($transaction->products as $item )
                                                                @currency( $item->pivot->quantity * $item->price) 
                                                                @endforeach
                                                             
                                                            </p>

                                                        </td>

                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                            <p class="text-gray-900">

                                                                <a type="button"
                                                                    class="text-blue-600 hover:text-blue-900"
                                                                    data-modal-toggle="">Detail
                                                                </a>
                                                                <a type="button"
                                                                    class="text-indigo-600 hover:text-indigo-900"
                                                                    data-modal-toggle="">Edit
                                                                </a>
                                                                <a type="button"
                                                                    class="text-red-600 hover:text-red-900"
                                                                    data-modal-toggle="">Delete
                                                                </a>

                                                            </p>

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
        </div>
    </div>

       

    

</x-app-layout>
