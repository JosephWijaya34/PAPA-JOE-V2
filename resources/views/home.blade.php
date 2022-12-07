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
                        <img src="images/tentangpapajoe.png" alt="" srcset=""
                            class="mx-auto my-auto w-56 mt-4 md:mt-0 md:w-80 lg:w-auto" />
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
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white md:text-2xl">Sushi
                            Salmon</h5>
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
    </div>
    {{-- !menu favorit end --}}


    {{-- !mitra kami start --}}
    <section id="mitra" class="flex justify-center  pt-36 pb-32 bg-slate-100">

        <div class="container">
            <div class="w-full ">
                <div class="mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold text-primary text-papa-kuning">Mitra</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark text-papa-merah-200">
                        Mitra Yang Bekerja Sama
                    </h2>
                </div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="" target="_blank"
                        class="mx-4 max-w-[200px] py-4 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8 xl:opacity-60 xl:grayscale">
                        <img src="/images/logopapajoe.png" alt="Logo Valorant" />
                    </a>

                    <a href="" target="_blank"
                        class="mx-4 max-w-[200px] py-4 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8 xl:opacity-60 xl:grayscale">
                        <img src="/images/logopapajoe.png" alt="Logo Forza Horizon 5" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- !mitra kami end --}}

    {{-- !kontak kami start --}}
    <!-- Container for demo purpose -->
    <div class="h-auto bg-papa-merah-100 ">

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
                                                class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="dollar-sign" class="w-3 text-white" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                                                    <path fill="currentColor"
                                                        d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Technical support</p>
                                            <p class="text-gray-500">support@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="dollar-sign" class="w-3 text-white" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                                                    <path fill="currentColor"
                                                        d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Sales questions</p>
                                            <p class="text-gray-500">sales@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                                    <div class="flex align-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="newspaper" class="w-5 text-white" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Press</p>
                                            <p class="text-gray-500">press@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 lg:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                                    <div class="flex align-start">
                                        <div class="shrink-0">
                                            <div
                                                class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="bug" class="w-5 text-white" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="grow ml-6">
                                            <p class="font-bold mb-1">Bug report</p>
                                            <p class="text-gray-500">bugs@example.com</p>
                                            <p class="text-gray-500">+1 234-567-89</p>
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

    <!-- Container for demo purpose -->

    {{-- !kontak kami end --}}

@endsection
