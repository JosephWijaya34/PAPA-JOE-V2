<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    {{-- !Header start --}}

    <header
        class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-50 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="" class="flex items-center">
                <img src="/images/logo/logopapajoe.png" class="w-full" alt="PapaJoe's Logo">
            </a>
            <div class="flex md:order-2">
                {{-- login button --}}
                <button type="button"
                    class="text-white bg-papa-merah-200 hover:bg-papa-merah-100 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-papa-merah-100 dark:hover:bg-papa-merah-200 dark:focus:ring-papa-merah-100 ">Login</button>
                {{-- profile button --}}
                {{-- <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-10 h-10 rounded-full" src="/images/profile.jpg" alt="user photo">
                  </button>
                  <!-- Dropdown menu -->
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                      <span class="block text-sm text-gray-900 dark:text-white">Joseph</span>
                      <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">joseph@gmail.com</span>
                    </div>
                    <ul class="py-1" aria-labelledby="user-menu-button">
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                      </li>
                    
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                      </li>
                    </ul>
                  </div> --}}
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block text-sm py-2 pl-3 pr-4 text-white bg-red-700 rounded md:bg-transparent md:text-papa-merah-200 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block text-sm py-2 pl-3 pr-4 text-gray-700 hover:text-white hover:bg-papa-merah-200 md:text-gray-700 rounded md:hover:bg-gray-100 md:hover:bg-transparent md:hover:text-papa-merah-200 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <a href="/menu"
                        class="block text-sm py-2 pl-3 pr-4 text-gray-700 hover:text-white hover:bg-papa-merah-200 md:text-gray-700 rounded md:hover:bg-gray-100 md:hover:bg-transparent md:hover:text-papa-merah-200 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu</a>
                    </li>
                    <a href="#"
                        class="block text-sm py-2 pl-3 pr-4 text-gray-700 hover:text-white hover:bg-papa-merah-200 md:text-gray-700 rounded md:hover:bg-gray-100 md:hover:bg-transparent md:hover:text-papa-merah-200 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Service</a>
                    </li>
                    <a href="#"
                        class="block text-sm py-2 pl-3 pr-4 text-gray-700 hover:text-white hover:bg-papa-merah-200 md:text-gray-700 rounded md:hover:bg-gray-100 md:hover:bg-transparent md:hover:text-papa-merah-200 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    {{-- !Header End --}}

    <div class="mt-20">
        @yield('content')
    </div>

    {{-- <footer class="p-4 bg-white justify-center text-center rounded-lg shadow md:flex md:items-center md:justify-center md:p-6 dark:bg-gray-800">
        <span class="text-sm text-gray-500 xs:text-center sm:text-center dark:text-gray-400">© 2022 <a href="#"
                class="hover:underline">PAPA JOE'S</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap justify-center items-center text-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="text-center ml-6 mr-4 hover:underline md:mr-4">Home</a>
            </li>
            <li>
                <a href="#" class="text-center mr-4 hover:underline md:mr-4">About</a>
            </li>
            <li>
                <a href="#" class="text-center mr-4 hover:underline md:mr-4">Menu</a>
            </li>
            <li>
                <a href="#" class="text-center mr-4 hover:underline md:mr-4">Partner</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer> --}}

    {{-- footer --}}
    <footer aria-label="Site Footer" class="bg-gray-100">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <img src="images/logo/logopapajoe.png" alt="logo papajoe's" srcset="">
            </div>

            <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                consequuntur amet culpa cum itaque neque.
            </p>

            <nav aria-label="Footer Nav" class="mt-12">
                <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                    <li>
                        <a class="text-gray-700 transition hover:text-papa-merah-200" href="/">
                            Home
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-papa-merah-200" href="/">
                            About
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-papa-merah-200" href="/">
                            Menu
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-papa-merah-200" href="/">
                            Services
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-papa-merah-200" href="/">
                            Contact
                        </a>
                    </li>


                </ul>
            </nav>

            <ul class="mt-12 flex justify-center gap-6 md:gap-8">
                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-blue-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-[#8a3ab9]">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="/" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-green-500">
                        <span class="sr-only">Twitter</span>
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <title>WhatsApp</title>
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </a>
                </li>


            </ul>
        </div>
    </footer>


    @vite('resources/js/app.js')
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>
