@extends('layouts/mainlayouts')
@section('title', 'Menu')


@section('content')
    <div class="mx-auto p-7 lg:p-0 lg:max-w-[1240px]">
        <section class="overflow-hidden  sm:grid sm:grid-cols-2 sm:items-center">
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

                
            </div>

            <div class="mt-2 md:w-1/2 mx-auto">
            {{-- Filter dropdown start --}}
            <form>
                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">All<svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pork</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">No
                                    Pork</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Car sushi, nasi, dll..." required>
                        <button type="submit"
                            class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-red-700 rounded-r-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            {{-- Filter dropdown End --}}
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2 mt-4">
                @foreach ($product as $data)
                {{-- card --}}
                <div
                    class="max-w-sm bg-white border mt-10 border-gray-200 rounded-lg shadow-md relative block overflow-hidden group dark:bg-gray-800  dark:border-gray-700">
                    <a href="/detail/{{ $data->id }}">
                        <img class="rounded-t-lg object-cover w-full transition duration-500 group-hover:scale-105 h-32 md:h-72"
                            src="{{ asset('storage/' . $data->image) }}" alt="Foto Makanan PAPA JOE'S" />
                    </a>
                    <div class="p-5">
                        <a href="/detail/{{ $data->id }}">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white md:text-2xl">
                                {{ $data->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs md:text-lg">{{ $data->description }}</p>
                            <div class="mx-auto text-center">
                                <a href="/detail/{{ $data->id }}"
                                    class="inline-flex items-center px-7 md:px-10 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-papa-merah-100 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-papa-merah-100">
                                    Detail
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                    </div>
                </div>

                @endforeach
            </div>
            {{-- !menu end --}}
        </section>

    </div>

@endsection
