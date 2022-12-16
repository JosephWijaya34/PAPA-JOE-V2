@extends('layouts/mainlayouts')

@section('title', 'Home')


@section('content')

    {{-- ! notifikasi start --}}


    @if (Session::get('status') == 'success')
        <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                {{ Session::get('message') }} </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @elseif (Session::get('status') == 'error')
        <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                {{ Session::get('message') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    {{-- ! notifikasi end --}}

    <div class="mx-auto  p-7 lg:max-w-[1240px]">
        <!-- Hero section hero -->
        <section>
            <div id="home" class=' mx-auto grid md:grid-cols-2 h-2/3'>
                {{-- !foto di mobile --}}
                <div class=" block md:hidden mx-auto my-auto">
                    <img src="/images/logo/logohero.png" class="" alt="logo hero papajoe">
                </div>

                <div class=" my-auto text-center md:text-left font-lato">
                    {{-- ! text mobile --}}
                    <p class="text-3xl font-bold block md:hidden">
                        <span class="text-papa-kuning">Always</span> Give <span class="text-papa-kuning">Priority</span>
                        To <span class="text-papa-kuning">Taste</span class="text-papa-kuning"> &<span> Quality</span>.
                    </p>
                    {{-- ! text pc --}}
                    <p class="text-5xl font-bold hidden md:block">
                        <span class="text-papa-kuning">Always</span> Give <span class="text-papa-kuning">Priority</span><br>
                        To <span class="text-papa-kuning">Taste</span class="text-papa-kuning"> &<span> Quality</span>.
                    </p>
                    <p class="text-lg mt-5 text-justify md:p-0 md:w-3/4 ">
                        Kami menyediakan makanan yang sehat, lezat dan bersih. Makanan yang selalu baru
                        di masak untuk pelanggan
                        kami.
                    </p>

                    <button type="button"
                        class="  duration-400 text-white  mt-4 w-[140px] py-[10px] px-7 bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-md text-smtext-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Contact
                        Us</button>

                    <button type="button"
                        class="transition duration-400 text-gray-900 mt-4 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Our
                        Menu</button>

                </div>

                <div class="hidden md:block mx-auto my-auto">
                    <img src="/images/logo/logohero.png" class="" alt="logo hero papajoe">
                </div>


            </div>



        </section>
        <!-- Hero section end -->

        <!-- About Section Start -->
        <section class="mt-4" id="tentang">
            <div class='w-full'>
                <div class='max-w-[1240px] mx-auto grid md:grid-cols-2'>
                    {{-- kiri --}}
                    <div class='my-auto flex flex-col justify-center font-lato'>
                        <p class='font-bold text-3xl'>Tentang PAPA JOE'S</p>
                        <p class='text-lg max-w-md mt-4 text-justify'>Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Culpa
                            doloremque aperiam reiciendis quam vel deleniti, dolorum enim porro, exercitationem odit
                            voluptates
                            dignissimos? Eaque eligendi eveniet illo nulla quia. Non, esse?</p>
                    </div>

                    {{-- kanan --}}
                    <div class="my-auto">
                        <img src="images/tentangpapajoe.png" alt="" srcset=""
                            class="mx-auto my-auto w-56 mt-4 md:mt-0 md:w-80 lg:w-auto" />
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->
    </div>

    <!-- Mengapa Section Start -->
    <div id="mengapa" class="h-auto mt-4 bg-papa-merah-100">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8 font-lato">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold text-papa-kuning ">
                    Mengapa Kami
                </h2>

                <p class="mt-4 text-gray-50 sm:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores
                    laborum labore provident impedit esse recusandae facere libero harum
                    sequi.
                </p>
            </div>

            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">


                    <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center shadow-lg">
                        <div class="dot rounded m-4 " data-aos="fade-down" data-aos-delay="200">
                            <iconify-icon icon="carbon:order-details" style="color: #d0a138;" width="55"
                                height="50">
                            </iconify-icon>
                        </div>
                        <dt class=" text-lg font-medium text-gray-100">
                            Easy To Order
                        </dt>

                        <dd class="text-lg font-light text-gray-100 md:text-lg">simple ordering process and fast
                            response from
                            seller.</dd>
                    </div>

                    <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center shadow-lg">
                        <div class="dot rounded m-4 " data-aos="fade-down" data-aos-delay="200">
                            <iconify-icon icon="carbon:delivery" style="color: #d0a138;" width="55" height="50">
                            </iconify-icon>
                        </div>
                        <dt class=" text-lg font-medium text-gray-100">
                            On Time
                        </dt>

                        <dd class="text-lg font-light text-gray-100 md:text-lg">always providing your food in the right
                            time.</dd>
                    </div>

                    <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center shadow-lg">
                        <div class="dot rounded m-4 " data-aos="fade-down" data-aos-delay="400">
                            <iconify-icon icon="bxs:book-bookmark" style="color: #d0a138;" width="55"
                                height="50">
                            </iconify-icon>
                        </div>
                        <dt class=" text-lg font-medium text-gray-100">
                            Best Quality
                        </dt>

                        <dd class="text-lg font-light text-gray-100 md:text-lg">providing the best quality ingredients to
                            make the best quality food</dd>
                    </div>

                </dl>
            </div>
        </div>
    </div>

    <!-- Mengapa Section End -->

    {{-- !menu favorit start --}}
    <div id="menu" class="mx-auto p-2 lg:mt-10 lg:max-w-[1240px]">
        <div class="flex flex-col justify-center content-center items-center">
            <p class="text-3xl font-bold text-papa-merah-100">Menu Favorit</p>
            <p class="text-lg text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 mt-4">

            {{-- card --}}
            @foreach ($product as $data)
                @if ($data->status == 'terlaris')
                    <div
                        class="max-w-sm bg-white border mt-10 border-gray-200 rounded-lg shadow-md relative block overflow-hidden group dark:bg-gray-800  dark:border-gray-700">
                        <a href="/detail/{{ $data->id }}">
                            <img class="rounded-t-lg object-cover w-full transition duration-500 group-hover:scale-105 h-32 md:h-72"
                                src="{{ asset('storage/' . $data->image) }}" alt="Foto Makanan PAPA JOE'S" />
                        </a>
                        <div class="p-5">
                            <a href="/detail/{{ $data->id }}">
                                <h5
                                    class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white md:text-2xl">
                                    {{ $data->name }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs md:text-lg">
                                {{ $data->description }}</p>
                            <div class="mx-auto text-center">
                                <a href="/detail/{{ $data->id }}"
                                    class="inline-flex items-center px-10 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-papa-merah-100 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-papa-merah-100">
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
                @endif
            @endforeach

        </div>
    </div>
    {{-- !menu favorit end --}}


    {{-- !mitra kami start --}}
    <section id="mitra" class="flex justify-center  pt-36 pb-32 ">

        <div class="container">
            <div class="w-full">
                <div class="mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold text-primary text-papa-kuning">Mitra</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark text-papa-merah-200">
                        Mitra Yang Bekerja Sama
                    </h2>
                </div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    @foreach ($partner as $mitra)
                        <a href="/mitra/{{ $mitra->id }}"
                            class="mx-4 max-w-[200px] py-4 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8 xl:opacity-60 xl:grayscale">
                            <img src="storage/{{ $mitra->image_partner }}" alt="Logo {{ $mitra->name }}"
                                title="{{ $mitra->name }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- !mitra kami end --}}

    {{-- !kontak kami start --}}
    <!-- Container -->
    <div id="kontak" class="h-auto bg-papa-merah-100 ">

        <div class="container  mx-auto ">
            <!-- Section: Design Block -->
            <section class=" text-gray-800  ">
                <style>
                    .map-container-2 {
                        height: 500px;
                    }
                </style>
                <div class="block  bg-papa-merah-100 px-4 py-12 sm:px-6 md:py-16 lg:px-8">
                    <div class="mx-auto max-w-3xl text-center">
                        <h2 class="text-3xl mb-5 font-bold text-papa-kuning ">
                            Kontak Kami
                        </h2>
                    </div>

                    <div class="flex flex-wrap items-center ">
                        <div class="grow-0 shrink-0 basis-auto block w-full lg:flex lg:w-6/12 xl:w-4/12">
                            <div class="map-container-2 w-full">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6477441111733!2d112.68682387584904!3d-7.280860971555308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc3d3c4b4485%3A0x6ccfddfc0b27c2c1!2sJl.%20Darmo%20Permai%20Sel.%20XIII%20No.6%2C%20Pradahkalikendal%2C%20Kec.%20Dukuhpakis%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060226!5e0!3m2!1sid!2sid!4v1670430064375!5m2!1sid!2sid"
                                    class="left-0 top-0 h-full w-full" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
                            <div class="flex flex-wrap pt-12 lg:pt-0">
                                <div
                                    class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-white rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-black"
                                                    role="img" preserveAspectRatio="xMidYMid meet"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M20 18h-2V9.25L12 13L6 9.25V18H4V6h1.2l6.8 4.25L18.8 6H20m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1 text-white">Email support</p>
                                            <p class="text-gray-100">supportpapajoe@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-white rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg class="w-7 h-7 text-black" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" xmlns="http://www.w3.org/2000/svg" role="img"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1 text-white">Location</p>
                                            <p class="text-gray-100">Jl. Darmo Permai Selatan XIII / 6</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                                    <div class="flex align-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-white rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg class="w-7 h-7 text-black" aria-hidden="true" focusable="false"
                                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M16.6 14c-.2-.1-1.5-.7-1.7-.8c-.2-.1-.4-.1-.6.1c-.2.2-.6.8-.8 1c-.1.2-.3.2-.5.1c-.7-.3-1.4-.7-2-1.2c-.5-.5-1-1.1-1.4-1.7c-.1-.2 0-.4.1-.5c.1-.1.2-.3.4-.4c.1-.1.2-.3.2-.4c.1-.1.1-.3 0-.4c-.1-.1-.6-1.3-.8-1.8c-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3c-.6.6-.9 1.3-.9 2.1c.1.9.4 1.8 1 2.6c1.1 1.6 2.5 2.9 4.2 3.7c.5.2.9.4 1.4.5c.5.2 1 .2 1.6.1c.7-.1 1.3-.6 1.7-1.2c.2-.4.2-.8.1-1.2l-.4-.2m2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2c5.5 0 9.9-4.4 9.9-9.9c.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3c-1.5 0-2.9-.4-4.2-1.1l-.3-.2l-3.1.8l.8-3l-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1 text-white">WhatsApp</p>
                                            <p class="text-gray-100">+62 822 2103 0638</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 lg:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                                    <div class="flex align-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-white rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg class="w-7 h-7 text-black" aria-hidden="true" focusable="false"
                                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 9a3 3 0 1 0 0 6a3 3 0 0 0 0-6zm0-2a5 5 0 1 1 0 10a5 5 0 0 1 0-10zm6.5-.25a1.25 1.25 0 0 1-2.5 0a1.25 1.25 0 0 1 2.5 0zM12 4c-2.474 0-2.878.007-4.029.058c-.784.037-1.31.142-1.798.332a2.886 2.886 0 0 0-1.08.703a2.89 2.89 0 0 0-.704 1.08c-.19.49-.295 1.015-.331 1.798C4.006 9.075 4 9.461 4 12c0 2.474.007 2.878.058 4.029c.037.783.142 1.31.331 1.797c.17.435.37.748.702 1.08c.337.336.65.537 1.08.703c.494.191 1.02.297 1.8.333C9.075 19.994 9.461 20 12 20c2.474 0 2.878-.007 4.029-.058c.782-.037 1.309-.142 1.797-.331a2.92 2.92 0 0 0 1.08-.702c.337-.337.538-.65.704-1.08c.19-.493.296-1.02.332-1.8c.052-1.104.058-1.49.058-4.029c0-2.474-.007-2.878-.058-4.029c-.037-.782-.142-1.31-.332-1.798a2.911 2.911 0 0 0-.703-1.08a2.884 2.884 0 0 0-1.08-.704c-.49-.19-1.016-.295-1.798-.331C14.925 4.006 14.539 4 12 4zm0-2c2.717 0 3.056.01 4.122.06c1.065.05 1.79.217 2.428.465c.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.047 1.066.06 1.405.06 4.122c0 2.717-.01 3.056-.06 4.122c-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772a4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465c-1.066.047-1.405.06-4.122.06c-2.717 0-3.056-.01-4.122-.06c-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153a4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122c.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2z" />
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1 text-white">Instagram</p>
                                            <p class="text-gray-100">PAPAJOE.id</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->

        </div>
    </div>

    <!-- Container -->

    {{-- !kontak kami end --}}

    {{-- !komen start --}}
    <div class="container mx-auto pt-36 pb-32">
        <div class="w-full">
            <div class="mx-auto mb-16 text-center">
                <h4 class="mb-2 text-lg font-semibold text-primary text-papa-kuning">Review</h4>
                <h2 class="mb-4 text-3xl font-bold text-dark text-papa-merah-200">
                    Apa Kata Mereka ?
                </h2>
            </div>
        </div>

        <div class="splide">
            <div class="splide__track p-10">
                <div class="splide__list gap-x-4 ">
                    @foreach ($review as $review)
                        @if ($review->status == 'yes')
                            <div class="w-full p-4 shadow-lg splide__slide">
                                <div class="space-y-2">
                                    <h3 class="text-2xl font-semibold">
                                        {{ $review->user->name }}
                                    </h3>
                                    <p class="text-gray-600">
                                        {{ $review->comment }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>

        </div>

        {{-- button tambah komen --}}
        <div class="w-full">
            <div class="mx-auto mb-16 text-center flex justify-center mt-4">

                @guest
                    <a href="/login"
                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                       >
                        Review Papa Joe's
                    </a>
                @endguest

                @auth
                    <button
                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                        type="button" data-modal-toggle="staticModal">
                        Review Papa Joe's
                    </button>
                @endauth


            </div>
        </div>


        <!-- Main modal -->
        <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Review
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
                    <form action="{{ route('menu-review') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-6 space-y-6">

                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                review</label>
                            <textarea id="message" rows="4" name="comment" maxlength="75"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your thoughts here..."></textarea>

                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-toggle="staticModal" type="submit"
                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Send</button>
                            <button data-modal-toggle="staticModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- !komen end --}}

@endsection
