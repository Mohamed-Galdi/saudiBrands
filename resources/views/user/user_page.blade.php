@extends('layouts.master')
@section('content')
    <div class="mx-auto max-w-screen-xl">
        <div class="bg-pr_dark mt-12 py-4 shadow-lg rounded-md">
            <h1 class=" text-center  font-pr text-gray-200 text-3xl">
                شركاتك المفضلة </h1>
        </div>
        <div class="grid w-full grid-cols-3 justify-items-center gap-12 py-12 ">
            @forelse ($brands as $brand)
                <div
                    class="w-[80%] h-96 flex flex-col bg-gray-100 rounded-xl overflow-hidden hover:border-2 pb-6 hover:border-white hover:shadow-xl hover:cursor-pointer transition-all ease-in-out">
                    <img src={{ asset('storage/' . $brand->logo) }} alt="" class="h-2/3 object-cover">
                    <p class="font-pr text-xl text-center mt-2">{{ $brand->name }}</p>
                    <p class="text-pr_dark underline font-pr text-center">{{ $brand->address }}</p>
                    <div class="w-full my-4 flex justify-center items-start gap-8">
                        <div class=" flex items-center justify-center cursor-pointer">
                            <form action="{{ route('removeFromFavorites', ['brand' => $brand->id]) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="relative w-32 font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-pr_dark before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-3 py-2  font-semibold text-white bg-pr_dark border rounded-lg shadow-sm gap-x-2 hover:bg-pr_dark disabled:opacity-50 disabled:pointer-events-none text-nowrap">
                                    إزالة من المفضلة </button>
                            </form>

                        </div>
                        <div class=" flex items-center justify-center cursor-pointer">
                            <a href={{ 'https://' . $brand->address }} target="_blank"
                                class="relative w-32 font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-white before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-3 py-2  font-semibold text-black bg-white border rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                زيارة
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                <div class="flex flex-col col-span-3 justify-center items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-52 h-52">
                        <path fill="#425b45"
                            d="M384 480h48c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224H144c-11.4 0-21.9 6-27.6 15.9L48 357.1V96c0-8.8 7.2-16 16-16H181.5c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8H416c8.8 0 16 7.2 16 16v32h48V160c0-35.3-28.7-64-64-64H298.5c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H87.7 384z" />
                    </svg>
                    <h1 class="font-pr text-3xl text-pr_dark "> لا توجد لديك مفضلات بعد !</h1>

                </div>
            @endforelse
        </div>

    </div>
@endsection()
