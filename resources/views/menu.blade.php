@extends('layouts/mainlayouts')
@section('title', 'Menu')


@section('content')
    <div class="mx-auto  p-7 lg:p-0 lg:max-w-[1240px]">
        <section
  class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 sm:items-center"
>
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

  <img
    alt="Foto Menu Papajoe"
    src="/images/tentangpapajoe.png"
    class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-tl-[30px] md:h-[calc(100%_-_4rem)] md:rounded-tl-[60px]"
  />
</section>

    </div>

@endsection
