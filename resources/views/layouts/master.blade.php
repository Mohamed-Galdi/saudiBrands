<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>{{ config('app.name', 'Saudi Brands') }}</title>

    @vite('resources/css/app.css')
    @vite('resources/css/animation.css')
    @vite('node_modules/flowbite/dist/flowbite.min.js')

    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="/assets/graphics/logos/favicon.png">

</head>

<body class="bg-pr_light">
    {{-- ///////////////////// Header //////////////////////// --}}
    <header>
        <nav class="bg-pr_dark w-full z-50 top-0 start-0 border-b border-black relative shadow-xl">
            <div class="max-w-screen-xl h-full flex flex-wrap items-center justify-between mx-auto p-4">
                {{-- ///////////////////// LOGO //////////////////////// --}}
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="/assets/images/logo.jpg" class="max-w-12" alt="Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-3 ">
                    {{-- ///////////////////// My Account Buttuns in auth case //////////////////////// --}}
                    @if (Auth::check())
                        <form action={{ route('logout') }} method="POST" >
                            @csrf
                            <button type="submit"
                                class="text-gray-200 flex gap-2 justify-center bg-gray-800 hover:bg-gray-900 font-pr focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                                <p>تسجيل الخروج</p>
                            </button>
                        </form>
                        @if (Auth::user()->role === 'admin')
                            <a href="/admin-page"
                                class="text-pr_dark flex gap-2 justify-center bg-gray-300 font-pr focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4">
                                    <path fill="#425b45"
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                                <p>حسابي</p>
                            </a>
                        @elseif (Auth::user()->role === 'user')
                            <a href="/user-page"
                                class="text-pr_dark flex gap-2 justify-center bg-gray-300 font-pr focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4">
                                    <path fill="#425b45"
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                                <p>حسابي</p>
                            </a>
                        @elseif (Auth::user()->role === 'brand')
                            <a href="/brand-owner-page"
                                class="text-pr_dark flex gap-2 justify-center bg-gray-300 font-pr focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4">
                                    <path fill="#425b45"
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                                <p>حسابي</p>
                            </a>
                        @endif
                    @else
                        <div class="hidden md:flex gap-2  ">
                            {{-- ///////////////////// Auth Buttuns //////////////////////// --}}
                            {{-- login button --}}
                            <div class="w-full flex items-center justify-center cursor-pointer">
                                <a href="/auth-choice"
                                    class="relative font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-white before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-6 py-3  font-semibold text-black bg-white border rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    الدخول
                                </a>
                            </div>
                        </div>
                    @endif
                    {{-- ///////////////////// Mobile Menu Button //////////////////////// --}}
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#123456"
                            viewBox="0 0 17 14">
                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                {{-- ///////////////////// Menu //////////////////////// --}}
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col md:flex-row md:gap-6 gap-2 mt-6 md:mt-0">
                        <a href="{{ url('/') }}">
                            <li
                                class=" p-2  font-pr {{ Request::is('/') ? 'bg-black text-white rounded-lg border-2 border-black ' : 'text-black border-b border-pr transition-all duration-200 hover:rounded-lg md:hover:border-black md:hover:border-b-2 md:hover:bg-pr hover:bg-pr md:rounded-none rounded-lg ' }}">
                                الرئيسية
                            </li>
                        </a>
                        <a href="{{ url('/categories') }}">
                            <li
                                class=" p-2  font-pr {{ Request::is('categories') ? 'bg-black text-white rounded-lg border-2 border-black ' : 'text-black border-b border-pr md:hover:border-black md:hover:border-b-2 md:hover:bg-pr hover:bg-pr transition-all duration-200 hover:rounded-lg md:rounded-none rounded-lg ' }}">
                                الفئات </li>
                        </a>
                        <a href="{{ url('/about-us') }}">
                            <li
                                class=" p-2  font-pr {{ Request::is('about-us') ? 'bg-black text-white rounded-lg border-2 border-black ' : 'text-black border-b border-pr md:hover:border-black md:hover:border-b-2 md:hover:bg-pr hover:bg-pr transition-all duration-200 hover:rounded-lg md:rounded-none rounded-lg ' }}">
                                من نحن
                            </li>
                        </a>

                        <li class="flex justify-start gap-2 md:hidden ">
                            {{-- mobile login button --}}
                            <div class="w-full flex items-center justify-center cursor-pointer">
                                <a href="/auth-choice"
                                    class="relative font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-white before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-6 py-3  font-semibold text-black bg-white border rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    الدخول
                                </a>
                            </div>
                            {{-- mobile register button --}}

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="">
        @yield('content')
    </main>

    {{-- ///////////////////// Footer //////////////////////// --}}
    <footer class="bg-gray-800   w-full z-20 bottom-0 start-0 border-t border-gray-200 ">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex sm:flex-row flex-col  items-center justify-between">
                <a href="" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="/assets/images/logo.jpg" class="w-24" alt="Logo" />
                </a>
                <ul class="flex flex-wrap items-center mb-6  font-medium text-light_2 sm:mb-0 ">
                    <li>
                        <a href="{{ url('/') }}"
                            class="hover:underline me-4 md:me-6 {{ Request::is('/') ? 'text-pr ' : 'text-white' }}">الرئيسية
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/categories') }}"
                            class="hover:underline me-4 md:me-6 {{ Request::is('categories') ? 'text-pr ' : 'text-white' }}">
                            الفئات
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about-us') }}"
                            class="hover:underline me-4 md:me-6 {{ Request::is('about-us') ? 'text-pr ' : 'text-white' }}">من
                            نحن
                        </a>
                    </li>

                </ul>
                <div class="flex gap-3 mb-2 sm:justify-center sm:mt-0">
                    <a href="https://youtube.com" target='_blank' class="text-white hover:text-pr">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path
                                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com" target='_blank' class="text-white hover:text-pr">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                    <a href="https://www.instagram.com" target='_blank' class="text-white hover:text-pr">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>


                </div>
            </div>
            <hr class="sm:my-6 my-2 border-gray-200 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-white sm:text-center text-center">© 2024 Saudi Brands, جميع
                الحقوق محفوضة</span>
        </div>
    </footer>
    @include('sweetalert::alert')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
