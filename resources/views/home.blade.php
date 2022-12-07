@extends('layouts/mainlayouts')

@section('title', 'Home')


@section('content')

    <div class="mx-auto  p-7 lg:max-w-[1240px]">
        <!-- Hero section hero -->
        <section>
            <div class=' mx-auto grid md:grid-cols-2 h-2/3'>
                {{-- !foto di mobile --}}
                <div class=" block md:hidden mx-auto my-auto">
                    <img src="images/logohero.png" class="" alt="logo hero papajoe">
                </div>

                <div class=" my-auto text-center md:text-left">
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
                        class="text-white  mt-4 w-[140px] py-[10px] px-7 bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-md text-smtext-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Contact
                        Us</button>

                    <button type="button"
                        class="text-gray-900 mt-4 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Our
                        Menu</button>

                </div>

                <div class="hidden md:block mx-auto my-auto">
                    <img src="images/logohero.png" class="" alt="logo hero papajoe">
                </div>


            </div>



        </section>
        <!-- Hero section end -->

        <!-- About Section Start -->
        <section class="mt-4">
            <div class='w-full'>
                <div class='max-w-[1240px] mx-auto grid md:grid-cols-2'>
                    {{-- kiri --}}
                    <div class='my-auto flex flex-col justify-center'>
                        <p class='font-bold text-3xl'>Tentang PAPA JOE'S</p>
                        <p class='text-lg max-w-md mt-4 text-justify'>Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Culpa
                            doloremque aperiam reiciendis quam vel deleniti, dolorum enim porro, exercitationem odit
                            voluptates
                            dignissimos? Eaque eligendi eveniet illo nulla quia. Non, esse?</p>
                    </div>

                    {{-- kanan --}}
                    <div class="my-auto">
                        <img src="images/tentangpapajoe.png" alt="" srcset="" class="mx-auto my-auto w-56 mt-4 md:mt-0 md:w-80 lg:w-auto"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->
    </div>

    <!-- Mengapa Section Start -->
    <div class="h-auto mt-4 bg-papa-merah-100">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold text-papa-kuning sm:text-4xl">
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
                            <iconify-icon icon="carbon:order-details" style="color: #d0a138;" width="55" height="50">
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
                            <iconify-icon icon="bxs:book-bookmark" style="color: #d0a138;" width="55" height="50">
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
    <div class="mx-auto p-2 lg:mt-10 lg:max-w-[1240px]">
        <div class="flex flex-col justify-center items-center">
            <p class="text-3xl font-bold text-papa-merah-100">Menu Favorit</p>
            <p class="text-lg text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
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
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white md:text-2xl">Sushi Salmon</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs md:text-lg">Sushi dengan isian salmon dan diberi saus khas papa joe.</p>
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

        {{-- !menu favorit end --}}



    @endsection
