<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mitra') }}
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
                                    <h1 class="text-xl font-semibold text-gray-900">Mitra</h1>
                                    <p class="mt-2 text-sm text-gray-700">Halaman Mitra</p>
                                </div>
                                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                                    <button type="button"
                                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                                        type="button" data-modal-toggle="staticModal">Add
                                        Mitra</button>
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
                                                            Foto Mitra</th>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                            Nama</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Lokasi</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Deskripsi</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Status</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            phone</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                            Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white text-center">
                                                    {{-- @foreach () --}}
                                                        <tr>
                                                            <td></td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 flex justify-center items-center text-sm sm:pl-6 ">
                                                                <div class="w-32 ">
                                                                    <img class=" w-auto rounded-sm"
                                                                        src=""
                                                                        alt="">

                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                                <p class="text-gray-900">


                                                                </p>

                                                            </td>

                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 w-24">
                                                                <p class="text-gray-900">

                                                                </p>
                                                            </td>


                                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{-- @currency() --}}
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">

                                                                <a type="button"
                                                                    class="text-indigo-600 hover:text-indigo-900"
                                                                    data-modal-toggle="">Edit
                                                                    </a>

                                                                <form action=""
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="text-red-600 hover:text-red-900"
                                                                        onclick="return confirm('Do you want to delete this product?')"
                                                                        type="submit">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    {{-- @endforeach --}}

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal  --}}
        <!-- Main modal tambah-->
        <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add Product
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="staticModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-6">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    Produk</label>
                                <input type="text" id="name" name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mb-6">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <textarea id="description" name="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                            </div>

                            <div class="mb-6">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" id="price" name="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-6">

                                <label for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <select id="status" name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="terlaris">Terlartis</option>
                                    <option value="tidak">Tidak Aktif</option>

                                </select>

                            </div>

                            <div class="mb-6">

                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="image">Photo Product</label>
                                <input
                                    class="block w-full text-sm text-blue-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="image" name="image" type="file">

                            </div>

                            <button data-modal-toggle="staticModal" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            <button data-modal-toggle="staticModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        
</x-app-layout>

