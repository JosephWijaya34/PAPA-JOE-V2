@extends('layouts/mainlayouts')
@section('title', 'Menu')


@section('content')
    <div class="mx-auto p-7 lg:p-0 lg:max-w-[1240px]">
        <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 sm:items-center">
            <div class="p-8 md:p-12 lg:px-16 lg:py-24">
                <div class="mx-auto max-w-xl text-center sm:text-left">
                    <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit
                    </h2>

                    <p class="hidden text-gray-500 md:mt-4 md:block">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas
                        tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et
                        fermentum, augue. Aliquet amet volutpat quisque ut interdum tincidunt
                        duis.
                    </p>
                </div>
            </div>
            <img alt="Foto Menu Papajoe" src="/images/tentangpapajoe.png"
                class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-tl-[30px] md:h-[calc(100%_-_4rem)] md:rounded-tl-[60px]" />
        </section>

        {{-- !menu Start --}}
        <section class="mt-20">
            <div class="flex flex-col justify-center items-center">
                <p class="text-3xl font-bold text-papa-merah-100">Menu</p>
                <p class="text-lg text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                </p>

                {{-- Filter dropdown start --}}
                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="text-black bg-gray-300 hover:text-white hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Semua<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-green-500 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">No Pork</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-red-500 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">Pork</a>
                        </li>
                    </ul>
                </div>
                {{-- Filter dropdown End --}}
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-mt-4">

                {{-- card --}}
                <div
                    class="max-w-sm bg-white border mt-10 border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/images/tesmakanan.jpeg" alt="Foto Makanan PAPA JOE'S" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white md:text-2xl">
                                Sushi Salmon</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs md:text-lg">Sushi dengan isian
                            salmon dan diberi saus khas papa joe.</p>
                        <div class="mx-auto text-center">
                            <a href="/detail"
                                class="inline-flex items-center px-10 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-papa-merah-100 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-papa-merah-100">
                                Detail
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- !menu end --}}
        </section>

    </div>

@endsection
