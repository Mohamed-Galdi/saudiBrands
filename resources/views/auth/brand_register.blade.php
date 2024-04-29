@extends('layouts.master')
@section('content')
    <div>
        <div class="min-h-screen bg-pr flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 font-sec text-center text-3xl leading-9 font-extrabold text-pr_dark">
                    إنشاء حساب صاحب شركة </h2>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form method="POST" action={{route('brandOwner.store')}} enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="relative h-11 w-full min-w-[200px]">
                                <input placeholder="الإسم" name="name" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent border-x-0 border-t-0 focus:outline-none focus:ring-0  pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    الإسم
                                </label>
                            </div>
                            @error('name')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <div class="relative h-11 w-full min-w-[200px]">
                                <input placeholder="البريد الإلكتروني" name="email" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent border-x-0 border-t-0 focus:outline-none focus:ring-0  pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    البريد الإلكتروني
                                </label>
                            </div>
                            @error('email')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <div class="relative h-11 w-full min-w-[200px]">
                                <input placeholder="كلمة المرور " name="password" type="password" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent border-x-0 border-t-0 focus:outline-none focus:ring-0  pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    كلمة المرور
                                </label>
                            </div>
                            @error('password')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex items-center justify-around mt-6 gap-1">
                            <div class="text-nowrap text-pr">معلومات الشركة</div>
                            <div class="w-full h-[3px] rounded-lg bg-pr"></div>
                        </div>
                        <div class="mt-3">
                            <div class="relative h-11 w-full min-w-[200px]">
                                <input placeholder=" إسم الشركة " name="brandName" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent border-x-0 border-t-0 focus:outline-none focus:ring-0  pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    إسم الشركة
                                </label>
                            </div>
                            @error('brandName')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <label for="countries" class="block mb-2 text-sm  text-gray-700 dark:text-white">الفئة</label>
                            <select id="countries" name="type" required
                                class="bg-gray-50 px-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                    إنشاء الحساب </button>
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
@endsection()
