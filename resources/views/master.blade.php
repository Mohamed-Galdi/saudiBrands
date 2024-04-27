<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>{{ config('app.name', 'Tawsila') }}</title>

    @vite('resources/css/app.css')
    @vite('resources/css/animation.css')
    @vite('node_modules/flowbite/dist/flowbite.min.js')

    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="/assets/graphics/logos/favicon.png">

</head>

<body class="w-screen">
    {{-- /////////////////// Header ////////////////////// --}}
    <header>
        <nav class="bg-pr_dark w-full z-50 top-0 start-0 border-b border-black relative shadow-xl">
            <div class="max-w-screen-xl h-full flex flex-wrap items-center justify-between mx-auto p-4">
                {{-- ///////////////////// LOGO //////////////////////// --}}
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="/assets/images/logo.jpg" class="max-w-12" alt="Logo">
                </a>

                {{-- menu --}}
                <div class="items-center justify-between hidden w-full md:flex md:w-auto" id="navbar-sticky">
                    <ul class="flex flex-col md:flex-row md:gap-6 gap-2 mt-6 md:mt-0">
                        <a href="{{ url('/') }}">
                            <li
                                class=" p-2  font-pr {{ Request::is('/') ? 'bg-black text-white rounded-lg border-2 border-black ' : 'text-black border-b border-pr md:hover:border-black md:hover:border-b-2 md:hover:bg-pr hover:bg-tawsila-600 md:rounded-none rounded-lg ' }}">
                                الرئيسية
                            </li>
                        </a>
                        <a href="{{ url('/trips') }}">
                            <li
                                class=" p-2  font-pr {{ Request::is('trips') ? 'bg-black text-white rounded-lg border-2 border-black ' : 'text-black border-b border-pr md:hover:border-black md:hover:border-b-2 md:hover:bg-pr hover:bg-tawsila-600 md:rounded-none rounded-lg ' }}">
                                الرحلات </li>
                        </a>
                        <a href="{{ url('/about-us') }}">
                            <li
                                class=" p-2  font-pr {{ Request::is('about-us') ? 'bg-black text-white rounded-lg border-2 border-black ' : 'text-black border-b border-pr md:hover:border-black md:hover:border-b-2 md:hover:bg-pr hover:bg-tawsila-600 md:rounded-none rounded-lg ' }}">
                                من نحن
                            </li>
                        </a>
                        <a href="{{ url('/contact-us') }}">
                            <li
                                class=" p-2  font-pr {{ Request::is('contact-us') ? 'bg-black text-white rounded-lg border-2 border-black ' : 'text-black border-b border-pr md:hover:border-black md:hover:border-b-2 md:hover:bg-pr hover:bg-tawsila-600 md:rounded-none rounded-lg ' }}">
                                تواصل معنا
                            </li>
                        </a>
                        <li class="flex justify-start gap-2 md:hidden ">
                            {{-- mobile login button --}}
                            <div class="flex items-center justify-center cursor-pointer">
                                <a {{-- <a href="{{ route('login-choice') }}" --}}
                                    class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-soft_black transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 dorkbg-gray-700 dorktext-white dorkhover:text-gray-200 dorkshadow-none group">
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-soft_black group-hover:h-full"></span>
                                    <span
                                        class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#000"
                                            class="w-5 h-5 text-tawsila-500">
                                            <path
                                                d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                        </svg>
                                    </span>
                                    <span
                                        class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#fff"
                                            class="w-5 h-5 text-tawsila-500">
                                            <path
                                                d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                        </svg>
                                    </span>
                                    <span
                                        class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white dorkgroup-hover:text-gray-200 font-pr">الدخول</span>
                                </a>
                            </div>
                            {{-- mobile register button --}}
                            <div class=" flex items-center justify-center cursor-pointer">
                                <a href="/student-register"
                                    class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-soft_black transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 dorkbg-gray-700 dorktext-white dorkhover:text-gray-200 dorkshadow-none group">
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-soft_black group-hover:h-full"></span>
                                    <span
                                        class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#000"
                                            class="w-5 h-5 text-tawsila-500">
                                            <path
                                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                        </svg>
                                    </span>
                                    <span
                                        class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#fff"
                                            class="w-5 h-5 text-tawsila-500">
                                            <path
                                                d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                        </svg>
                                    </span>
                                    <span
                                        class="relative text-nowrap w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white dorkgroup-hover:text-gray-200 font-pr">إنشاء
                                        حساب
                                    </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- login --}}
                <div>
                    <a href="/login">login</a>
                    <a href="/register">register</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="">
        @yield('content')
    </main>
</body>

</html>
