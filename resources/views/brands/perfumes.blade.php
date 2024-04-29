@extends('layouts.master')
@section('content')
    <div class="mx-auto max-w-screen-xl">
        <div class="bg-pr_dark mt-12 py-4 shadow-lg rounded-md">
            <h1 class=" text-center  font-pr text-gray-200 text-3xl">
                شركات العطور
            </h1>
        </div>
        <div class="grid w-full grid-cols-3 justify-items-center gap-12 py-12 ">
            @forelse ($perfumes as $perfume)
                <div
                    class="w-[80%] h-96 flex flex-col bg-gray-100 rounded-xl overflow-hidden hover:border-2 pb-6 hover:border-white hover:shadow-xl hover:cursor-pointer transition-all ease-in-out">
                    <img src={{ asset('storage/' . $perfume->logo) }} alt="" class="h-2/3 object-cover">
                    <p class="font-pr text-xl text-center mt-2">{{ $perfume->name }}</p>
                    <p class="text-pr_dark underline font-pr text-center">{{ $perfume->address }}</p>
                    <div class="w-full my-4 flex justify-center items-start gap-8">
                        @if(Auth::check() && Auth::user()->role == 'user')
                        <div class=" flex items-center justify-center cursor-pointer">
                            <form action="{{ route('addToFavorites', ['brand' => $perfume->id]) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                    class="relative w-32 font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-pr_dark before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-3 py-2  font-semibold text-white bg-pr_dark border rounded-lg shadow-sm gap-x-2 hover:bg-pr_dark disabled:opacity-50 disabled:pointer-events-none text-nowrap">
                                    إضافة للمفضلة
                                </button>
                            </form>
                        </div>
                        @endif
                        <div class=" flex items-center justify-center cursor-pointer">
                            <a href={{'https://'.$perfume->address}} target="_blank"
                                class="relative w-32 font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-white before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-3 py-2  font-semibold text-black bg-white border rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                زيارة
                            </a>
                        </div>

                    </div>
                </div>
            @empty
            @endforelse
        </div>

    </div>
@endsection()
