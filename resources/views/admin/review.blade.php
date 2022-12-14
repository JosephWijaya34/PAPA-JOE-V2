{{-- table --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Review') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- !table start --}}
                    <div class="px-4 sm:px-6 lg:px-8">
                        {{-- !validation start --}}
                        @if ($errors->any())
                            {{-- refresh kalau ketemu error selama 5 detik --}}
                            <meta http-equiv="refresh" content="5">
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
                           
                            <meta http-equiv="refresh" content="3">
                            <div class="p-4 mb-4 text-sm  {{ Session::get('status') == 'error'  ? 'text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800' : ' text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800' }} "
                                role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        {{-- !message end --}}
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-xl font-semibold text-gray-900">Review</h1>
                                <p class="mt-2 text-sm text-gray-700">Halaman Review</p>
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                                <button type="button"
                                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                                    type="button" data-modal-toggle="staticModalReview">Add
                                    Review</button>
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
                                                        Nama</th>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                        Review</th>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                                        status</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                                        Action</th>

                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white text-center">


                                                @foreach ($review as $data)
                                                    <tr>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 ">
                                                            <p class="text-gray-900">
                                                                {{ $loop->iteration }}
                                                            </p>

                                                        </td>

                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 ">
                                                            <p class="text-gray-900">
                                                                {{ $data->user->name }}
                                                            </p>
                                                        </td>

                                                        <td class="px-3 py-4 text-sm text-gray-500 w--24">
                                                            <p class="text-gray-900">
                                                                {{ $data->comment }}
                                                            </p>

                                                        </td>

                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 ">
                                                            <p class="text-gray-900">
                                                                @if ($data->status == 'no')
                                                                    <span
                                                                        class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Not
                                                                        Show
                                                                    </span>
                                                                @else
                                                                    <span
                                                                        class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Show
                                                                    </span>
                                                                @endif

                                                            </p>

                                                        </td>

                                                        <td
                                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">

                                                            <a type="button"
                                                                class="text-indigo-600 hover:text-indigo-900"
                                                                data-modal-toggle="editModal{{ $data->id }}">Edit
                                                            </a>

                                                            <form action="{{ route('review.destroy', $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="text-red-600 hover:text-red-900"
                                                                    onclick="return confirm('Do you want to delete this review?')"
                                                                    type="submit">Delete</button>
                                                            </form>
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
        {{-- Modal  --}}
        <!-- Main modal tambah-->
        <div id="staticModalReview" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
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
                            data-modal-toggle="staticModalReview">
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

                        <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="comment"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Komen</label>
                                <input type="text" id="comment" name="comment"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <button data-modal-toggle="staticModalReview" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            <button data-modal-toggle="staticModalReview" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Main modal edit-->
        @foreach ($review as $data)

            <div id="editModal{{ $data->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
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
                                data-modal-toggle="editModal{{ $data->id }}">
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

                            <form action="{{ route('review.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-6">
                                    <label for="Name" 
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Komen</label>
                                    <input type="text" id="Name"  value="{{ $data->user->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                </div>
                                <div class="mb-6">
                                    <label for="comment" 
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Komen</label>
                                    <input type="text" id="comment"  value="{{ $data->comment }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                </div>
                                <div class="mb-6">
                                    <select id="status" name="status" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                    <option selected value="{{ $data->status }}">
                                        @if ($data->status == 'no')
                                            Tidak Tampil
                                        @else
                                            Tampil
                                        @endif
                                    </option>
                                    @if ($data->status == 'yes')
                                    <option value="no">Tidak Tampil</option>
                                    @else
                                    <option value="yes">Tampil</option>
                                        
                                    @endif
                                    
                                    
                                </select>
                                </div>
                                

                                <button data-modal-toggle="editModal{{ $data->id }}" type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                <button data-modal-toggle="editModal{{ $data->id }}" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

    </div>
    @endforeach

</x-app-layout>
