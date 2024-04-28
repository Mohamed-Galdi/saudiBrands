@extends('layouts.master')
@section('content')
    <div class="my-20 flex flex-col justify-start  items-center mx-auto max-w-screen-xl min-h-[70vh]">
        {{-- <a href="{{ route('cars.create') }}"> --}}
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="mb-6 bg-pr_dark p-2 text-white drop-shadow-lg hover:bg-pr-600 hover:cursor-pointer rounded-md hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-8 h-8 inline">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            إضافة شركة جديدة
        </button>
        <div class=" relative overflow-x-auto shadow-md sm:rounded-lg w-full  ">
            <table class="w-full  text-right text-gray-500 dark:text-gray-400 ">
                <thead class=" text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            الصورة
                        </th>
                        <th scope="col" class="px-6 py-3">
                            إسم الشركة
                        </th>
                        <th scope="col" class="px-6 py-3">
                            النوع
                        </th>
                        <th scope="col" class="px-6 py-3">
                            العنوان
                        </th>
                        <th scope="col" class="px-6 py-3">
                            عدد المفضلة
                        </th>
                        <th scope="col" class="px-6 py-3">
                            العمليات
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="p-0.5 rounded-md border-2 border-pr-400 ">

                                    <img loading="lazy" src="{{ 'storage/' . $brand->logo }}" alt="brand image">
                                </div>

                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $brand->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ match ($brand->type) {
                                    'clothes' => 'ملابس',
                                    'restaurant' => 'مطعم',
                                    'cafe' => 'مقهى',
                                    'perfume' => 'عطور',
                                    default => 'غير معروف',
                                } }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $brand->address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $brand->favorites_count }}
                            </td>


                            <td class="flex my-4 py-3  px-6  gap-x-8 ">
                                
                                <form action="{{ route('brand.edit', ['brand' => $brand->id]) }}" method="GET">
                                    @csrf
                                    <button type="submit"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">تعديل</a>
                                </form>
                                <form action="{{ route('deleteBrand', ['brand' => $brand->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


        <!-- Create Brand modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed bg-black/50 top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[100%] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white font-pr">
                            إضافة شركة جديدة </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only"> إلغاء</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form method="POST" class="p-4" action={{ route('brand.store') }} enctype="multipart/form-data">
                        @csrf

                        <div class="mt-3">
                            <div class="relative h-11 w-full min-w-[200px]">
                                <input placeholder=" إسم الشركة " name="name" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent border-x-0 border-t-0 focus:outline-none focus:ring-0  pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    إسم الشركة
                                </label>
                            </div>
                            @error('name')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <label for="countries" class="block mb-2 text-sm  text-gray-700 dark:text-white">الفئة</label>
                            <select id="countries" name="type" required
                                class="bg-gray-50 px-8 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option dir="ltr" selected>إختر فئة</option>
                                <option value="clothes">الملابس</option>
                                <option value="restaurant">المطاعم</option>
                                <option value="cafe">المقاهي</option>
                                <option value="perfume">العطور</option>
                            </select>
                            @error('type')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6">

                            <div class="flex flex-col gap-2 w-full mt-3">
                                <label for="image" id="image_label"
                                    class="bg-gray-200 text-center font-pr py-2 rounded-lg text-black hover:cursor-pointer hover:black">
                                    الصورة
                                </label>
                                <input name="image" type="file" id="image" class="hidden" required
                                    onchange="displayFileName()">
                            </div>
                            @error('image')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mt-3">
                            <div class="relative h-11 w-full min-w-[200px]">
                                <input placeholder=" الموقع  " name="address" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent border-x-0 border-t-0 focus:outline-none focus:ring-0  pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    الموقع
                                </label>
                            </div>
                            @error('adress')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit"
                                    class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-pr_dark/80 hover:bg-pr_dark  transition duration-150 ease-in-out">
                                    إضافة الشركة </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <script>
        function displayFileName() {
            const input = document.getElementById('image');
            const label = document.getElementById('image_label');

            if (input.files && input.files[0]) {
                label.textContent = input.files[0].name;
            } else {
                label.textContent = 'تحميل الصورة';
            }
        }
    </script>
@endsection
