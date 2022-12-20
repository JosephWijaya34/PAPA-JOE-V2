@extends('layouts/mainlayouts')
@section('title', 'Mitra')

@section('content')
    {{-- <div class="py-5">
        <div class="static">
            <img class="blur-sm w-full h-full" src="/images/hokkydarmo.jpeg" alt="background Partner">
        </div>
    </div> --}}

    {{-- hero section Start --}}
    <div class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer">
        <img class="object-cover w-full h-2/4 blur-sm" src="/images/hokkydarmo.jpeg" alt="Hokky" />

        <div class="absolute top-0 left-0 px-6 py-4 flex items-center w-full h-full">
            <h4 class="mb-3 text-xl font-semibold tracking-tight text-white">{{ $partner->name }}</h4>
        </div>
    </div>
    {{-- hero section End --}}

    {{-- mitra info start --}}

    <div class="mx-auto p-2 lg:mt-10 lg:max-w-[1240px]">
        <div class="grid grid-cols-2">
            <div class="p-5">
                <img class="rounded-xl shadow-lg" src="{{ asset('storage/' . $partner->image_partner) }}" alt="foto logo">
            </div>
            <div class="p-5">
                <h1 class="text-2xl font-semibold">{{ $partner->name }}</h1>
                <h3 class="text-lg">{{ $partner->location }}</h3>
                <p class="text-lg">{{ $partner->phone }}</p>
            </div>
        </div>
    </div>
    {{-- mitra info end --}}

    {{-- mitra info makanan start --}}
    <div class="mx-auto p-2 lg:mt-10 lg:max-w-[1240px]">
        <div class="flex flex-col justify-center items-center">
            <p class="text-3xl font-bold text-papa-merah-100">Menu yang tersedia di {{ $partner->name }}</p>
        </div>
     

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-mt-4">
            {{-- card --}}
          
            @foreach ($partner->products as $data)
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
    </div>

@endsection
