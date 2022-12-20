{{-- table --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Social Media') }}
        </h2>
    </x-slot>
    @php
        $totalHarga = 0;
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        {{-- {{ $transactions }} --}}
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
                                                            Tanggal</th>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                            Nama</th>
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

                                                    @foreach ($transactions as $transaction)
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

                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24"">
                                                                @if ($transaction->status == 'cart')
                                                                    <span
                                                                        class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Cart
                                                                    </span>
                                                                @elseif ($transaction->status == 'paid')
                                                                    <span
                                                                        class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Paid

                                                                    </span>
                                                                @elseif ($transaction->status == 'done')
                                                                    <span
                                                                        class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Done

                                                                    </span>
                                                                @endif

                                                            </td>

                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                                <p class="text-gray-900">

                                                                    <?php $totalHarga = 0; ?>
                                                                    @foreach ($transaction->products as $product)
                                                                        <?php
                                                                        
                                                                        $totalHarga += $product->price * $product->pivot->quantity; ?>
                                                                    @endforeach
                                                                    @currency($totalHarga)
                                                                </p>

                                                            </td>

                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                                <p class="text-gray-900">

                                                                    <a type="button"
                                                                        class="text-blue-600 hover:text-blue-900"
                                                                        data-modal-toggle="editModal/{{ $transaction->id }}">Edit
                                                                    </a>

                                                                    {{-- <a type="button"
                                                                        class="text-indigo-600 hover:text-indigo-900"
                                                                        >Detail
                                                                    </a>

                                                                    <a type="button"
                                                                        class="text-red-600 hover:text-red-900"
                                                                        data-modal-toggle="">Delete
                                                                    </a> --}}

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

@foreach ($transactions as $transaction)
    <!-- Main modal -->
    <div id="editModal/{{ $transaction->id }}" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Detail Transaksi
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="editModal/{{ $transaction->id }}">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form action="{{ route('transaksi.update', $transaction->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Nama Makanan:</h2>
                            <ul class="space-y-1 max-w-md list-disc list-inside text-gray-500 dark:text-gray-400">
                                @foreach ($transaction->products as $item)
                                    <li class="">
                                        {{ $item->name }} | jumlah: {{ $item->pivot->quantity }}
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                        <div class="mb-6">
                            <label for="tanggal"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                            <input type="text" id="tanggal" name="tanggal" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $transaction->userTransaction->created_at->format('d M Y') }}">
                        </div>
                        <div class="mb-6">
                            <label for="harga"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                Harga</label>
                            <input type="text" id="price" name="harga" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="@currency($totalHarga)">
                        </div>


                        <div class="mb-6">

                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select id="status" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="{{ $transaction->status }}">
                                    @if ($transaction->status == 'cart')
                                        Cart
                                    @elseif ($transaction->status == 'paid')
                                        Paid
                                    @elseif ($transaction->status == 'done')
                                        Done
                                    @endif
                                </option>
                                <option value="cart">Cart</option>
                                <option value="paid">Paid</option>
                                <option value="done">Done</option>
                            </select>

                        </div>

                        <div class="mb-6">
                            <label for="telp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                Telp
                                <a class="text-green-800 text-bold"
                                    href="https://api.whatsapp.com/send?phone=62{{ $transaction->userTransaction->telphone }}&text=halo%20kami%20dari%20papajoe's%20ingin%20mengkonfirmasi%20pesanan%20anda"
                                    target="_blank">Whatsapp</a>
                            </label>
                            <input type="text" id="status" name="telp" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value=" {{ $transaction->userTransaction->telphone }}">
                        </div>
                        <div class="mb-6">
                            <label for="telp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti Pembayaran

                            </label>
                            <img src="{{ asset('storage/' . $transaction->payment_photo) }}" alt=""
                                class=" h-72 rounded-md">

                        </div>



                </div>

                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-toggle="editModal/{{ $transaction->id }}" type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    <button data-modal-toggle="editModal/{{ $transaction->id }}" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
