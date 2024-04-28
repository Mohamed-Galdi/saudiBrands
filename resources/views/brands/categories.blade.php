@extends('layouts.master')
@section('content')
    <div class="flex md:flex-row flex-col justify-between items-center mx-auto max-w-screen-xl min-h-[80vh] md:my-0 my-12 md:gap-0 gap-6 ">
        {{-- <div class="w-2/3 h-full flex items-center justify-evenly gap-4 "> --}}
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 w-2/3 gap-4 md:order-1 order-2 ">
            <a href={{route('brands.clothes')}} class=" rounded-lg overflow-hidden relative cursor-pointer hover:shadow-xl hover:brightness-110">
                <div class="absolute top-4 right-4 ">
                    <p class="text-pr_dark font-pr text-lg">الملابس</p>
                    <p class="text-gray-300 font-sec text-start mt-4"> اشهر الشركات السعوديه لتصميم الملابس وتقديم تشكيله متنوعه وعصريه وذات جودة عاليه وتناسب جميع الاذواق
                    </p>

                </div>
                <img class="" loading="lazy" class=" object-cover" src="./assets/images/categories/clothes.jpg"
                    alt="cafe">
            </a>
            <a href={{route('brands.cafes')}} class=" rounded-lg overflow-hidden relative cursor-pointer hover:shadow-xl hover:brightness-110">
                <div class="absolute top-4 right-4 ">
                    <p class="text-pr_dark font-pr text-lg">المقاهي</p>
                    <p class="text-gray-300 font-sec text-start mt-4"> المقاهي السعوديه التي تتميز بتقديم مجموعه متنوعه من القهوه والشاي بالاضافه الى المشروبات البارده والوجبات الخفيفه
                    </p>

                </div>
                <img class="max-h-full" loading="lazy" class=" object-cover" src="./assets/images/categories/cafe.jpg"
                    alt="cafe">
            </a>
            <a href={{route('brands.restaurants')}} class=" rounded-lg overflow-hidden relative cursor-pointer hover:shadow-xl hover:brightness-110">
                <div class="absolute top-4 right-4 ">
                    <p class="text-pr_dark font-pr text-lg">المطاعم</p>
                    <p class="text-gray-300 font-sec text-start mt-4">  اشهر المطاعم السعودية التي تقدم مجموعة متنوعه من الماكولات السعودية والعالمية واللتي تناسب جميع الاذواق
                    </p>

                </div>
                <img class="max-h-full" loading="lazy" class=" object-cover" src="./assets/images/categories/restaurant.jpg"
                    alt="cafe">
            </a>
            <a href={{route('brands.perfumes')}} class=" rounded-lg overflow-hidden relative  cursor-pointer hover:shadow-xl hover:brightness-110">
                <div class="absolute top-4 right-4 ">
                    <p class="text-pr_dark font-pr text-lg">العطور</p>
                    <p class="text-gray-300 font-sec text-start mt-4">  شركات العطور السعودية التي تقدم مجموعة رائعة من العطور الفاخرة والمميزة والمستوحاة من الثقافه والتراث السعودي
                    </p>

                </div>
                <img class="max-h-full" loading="lazy" class=" object-cover" src="./assets/images/categories/perfume.png"
                    alt="cafe">
            </a>
            




        </div>
        <div class="w-1/3 flex flex-col justify-center items-center md:order-2 order-1">
            <h1 class="text-9xl font-pr text-pr_dark">SA</h1>
            <h3 class="text-4xl font-sec mt-8 text-gray-500 font-bold text-nowrap">صنع في السعودية</h3>
        </div>
    </div>
@endsection()
