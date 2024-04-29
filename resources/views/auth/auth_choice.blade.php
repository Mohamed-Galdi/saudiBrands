@extends('layouts.master')
@section('content')
    <div class="w-[70vw] h-[70vh] flex justify-center items-center mx-auto mt-12">
        <div class="rounded-xl w-4/6 h-5/6 flex flex-col md:flex-row overflow-hidden">

            {{-- //////////////////// Driver Login //////////////////////// --}}
            <div class="md:w-1/2 w-full md:h-full h-1/2 bg-pr_dark relative flex flex-col justify items-center">
                <h2 class="font-pr text-2xl text-center md:mt-20 mt-8 text-white mb-8 ">الدخول كصاحب شركة
                </h2>
                {{-- login button --}}
                <div class="w-full flex items-center justify-center cursor-pointer">
                    <a href="/brand-login"
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-soft_black transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-100 dorkbg-gray-700 dorktext-white dorkhover:text-gray-200 dorkshadow-none group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-pr group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#000"
                                class="w-5 h-5 text-tawsila-500">
                                <path
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                            </svg>
                        </span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#000"
                                class="w-5 h-5 text-tawsila-500">
                                <path
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                            </svg>
                        </span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-soft_black dorkgroup-hover:text-gray-800 font-pr">الدخول</span>
                    </a>
                </div>
                <p class="text-center font-pr mt-4 text-gray-100">
                    ليس لديك حساب بعد، قم بإنشائه <span class="text-blue-500 cursor-pointer"><a href="/brand-register">من
                            هنا</a></span>
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-24 h-24 mt-12 ">
                    <path fill="#fff"
                        d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z" />
                </svg>
            </div>

            {{-- //////////////////// Student Login //////////////////////// --}}
            <div class="md:w-1/2 w-full md:h-full h-1/2 bg-pr relative flex flex-col justify items-center">
                <h2 class="font-pr text-3xl text-center md:mt-20 mt-8 text-soft_black mb-8 ">الدخول كعميل</h2>
                {{-- login button --}}
                <div class="w-full flex items-center justify-center cursor-pointer">
                    <a href="/user-login"
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-gray-200 bg-gray-900 hover:text-white  transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-soft_black dorkbg-gray-700 dorktext-white dorkhover:text-gray-200 dorkshadow-none group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-pr_dark group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#fff"
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
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-soft_black dorkgroup-hover:text-gray-800 font-pr">الدخول</span>
                    </a>
                </div>
                <p class="text-center font-pr mt-4">
                    ليس لديك حساب بعد، قم بإنشائه <span class="text-blue-500 cursor-pointer"><a href="/user-register">من
                            هنا</a></span>
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-24 h-24 mt-12" fill="#121828">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
            </div>
        </div>
    </div>
@endsection
