@extends('layouts/mainlayouts')
@section('title', 'Mitra')

@section('content')
    {{-- <div class="py-5">
        <div class="static">
            <img class="blur-sm w-full h-full" src="/images/hokkydarmo.jpeg" alt="background Partner">
        </div>

        
    </div> --}}

    <div class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer">
        <img class="object-cover w-full h-2/4 blur-sm" src="/images/hokkydarmo.jpeg" alt="Hokky"/>
    
        <div class="absolute top-0 left-0 px-6 py-4 flex items-center w-full h-full">
          <h4 class="mb-3 text-xl font-semibold tracking-tight text-white">Hokky</h4>
          </div>
      </div>

    
    
@endsection
