@extends('layouts.master')
@section('content')
    <div class="mx-auto max-w-screen-xl min-h-[70vh] flex flex-col items-center justify-center">
        <div class="py-6 text-2xl font-pr text-gray-200 bg-pr_dark w-1/2 rounded-xl text-center">
            <h1 class=""><span>تعديل معلومات المستخدم: </span> {{ $user->name }}</h1>
        </div>
        <form method="POST" class="p-4 w-1/2" action="{{ route('user.update', ['user' => $user->id]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mt-3">
                <div class="relative h-11 w-full min-w-[200px]">
                    <input placeholder=" الإسم  " name="name" required value="{{ $user->name }}"
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
            <div class="mt-3">
                <div class="relative h-11 w-full min-w-[200px]">
                    <input placeholder=" البريد الإلكتروني  " name="email" required value="{{ $user->email }}"
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
                <label for="countries" class="block mb-2 text-sm  text-gray-700 dark:text-white">الفئة</label>
                <select id="countries" name="role" required
                    class="bg-gray-50 border border-gray-300 px-12 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option dir="ltr" selected disabled> نوع الحساب</option>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>عميل</option>
                    <option value="brand" {{ $user->role == 'brand' ? 'selected' : '' }}>صاحب شركة</option>
                </select>
                @error('type')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-pr_dark/80 hover:bg-pr_dark  transition duration-150 ease-in-out">
                        حفظ التعديل </button>
                </span>
            </div>
        </form>
    </div>
@endsection()
