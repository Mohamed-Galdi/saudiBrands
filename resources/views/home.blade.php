@extends('layouts.master')
@section('content')
    {{-- Hero --}}
    <div class=" ">
        <div style="background-image: url('./assets/images/bg.jpg')"
            class=" h-[90vh] place-items-center bg-no-repeat  bg-buttom flex justify-start items-start ">

            <div class="md:ms-32 ms-8 flex flex-col gap-2 md:mt-36 mt-24">

                <h1 class="md:text-9xl text-6xl text-pr_dark font-pr">SA</h1>
                <h2 class="md:text-5xl text-2xl text-pr_dark font-pr">صنع في السعودية</h2>
                <p class="md:text-2xl text-lg text-gray-500 font-sec mt-6">وجهه مميزه لدعم الشركات المحليه في مجالات مختلفه</p>

                <div class="w-full mt-4 flex justify-start items-start gap-8">
                    <div class=" flex items-center justify-center cursor-pointer">
                        <a href="/categories"
                            class="relative w-40 font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-pr_dark before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-6 py-3  font-semibold text-white bg-pr_dark border rounded-lg shadow-sm gap-x-2 hover:bg-pr_dark disabled:opacity-50 disabled:pointer-events-none text-nowrap">
                            تصفح الشركات
                        </a>
                    </div>
                    <div class=" flex items-center justify-center cursor-pointer">
                        <a href="/auth-choice"
                            class="relative w-36 font-sec text-md isolation-auto z-10  border-pr before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full hover:text-white before:-right-full before:hover:right-0 before:rounded-full before:bg-pr before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700 inline-flex items-center justify-center px-6 py-3  font-semibold text-black bg-white border rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                            الدخول
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- About us Section --}}
    <div class=" md:p-12 p-3 mx-auto max-w-screen-xl ">
        <div class="bg-pr p-4 rounded-md m-6 text-center text-6xl font-pr text-pr_dark">
            عن <span class="text-pr_light">SA</span>
        </div>

        <div class="p-4 flex md:flex-row flex-col w-full gap-4 ">
            <div class="md:w-1/2 flex justify-center items-center gap-12 flex-col md:order-1 order-2">
                <h3 class="font-pr text-5xl text-pr_dark">SAUDI MADE</h3>
                <p class="text-justify text-gray-500 text-lg font-pr ">
                    الوجهه المميزه لدعم الشركات السعودية المحليه في الرياض بمجالات مختلفه مثل المطاعم وشركات العطور وتصميم
                    الازياء يهدف الموقع لتوفير مساحه لعرض منتجاتهم وخدماتهم بشكل جذاب ومبتكر
                </p>
            </div>
            <div class="md:w-1/2 border-8 border-white rounded-xl md:order-2 order-1 ">
                <video src="./assets/videos/saved.mp4" loop autoplay muted></video>

            </div>
        </div>

    </div>

    {{-- Our Services --}}
    <div class=" p-12 mx-auto max-w-screen-xl ">
        <!-- Container for demo purpose -->
        <div class="container mx-auto md:px-6">
            <!-- Section: Design Block -->
            <section class="mb-12 text-center">
                <h2 class="mb-20 text-5xl font-pr text-pr_dark underline decoration-white font-bold">إكتشف خدماتنا</h2>

                <div class="grid lg:grid-cols-3 lg:gap-x-12">
                    <div class="mb-12 lg:mb-0">
                        <div
                            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <div class="flex justify-center">
                                <div
                                    class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md bg-pr_dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12">
                                        <path fill="#ffffff"
                                            d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6">
                                <h5 class="mb-4 text-xl font-semibold font-pr">أزيد من 30 علامة تجارية</h5>
                                <p class="font-sec text-justify">
                                    مجموعة متنوعة وشاملة من العلامات التجارية السعودية المميزة والمبتكرة. يتم اختيار هذه
                                    العلامات بعناية لتقديم مجموعة متنوعة من المنتجات والخدمات .
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12 lg:mb-0">
                        <div
                            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <div class="flex justify-center">
                                <div
                                    class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md bg-pr_dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-12 h-12">
                                        <path fill="#ffffff"
                                            d="M218.3 8.5c12.3-11.3 31.2-11.3 43.4 0l208 192c6.7 6.2 10.3 14.8 10.3 23.5H336c-19.1 0-36.3 8.4-48 21.7V208c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h64V416H112c-26.5 0-48-21.5-48-48V256H32c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8.1-35.2l208-192zM352 304V448H544V304H352zm-48-16c0-17.7 14.3-32 32-32H560c17.7 0 32 14.3 32 32V448h32c8.8 0 16 7.2 16 16c0 26.5-21.5 48-48 48H544 352 304c-26.5 0-48-21.5-48-48c0-8.8 7.2-16 16-16h32V288z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6">
                                <h5 class="mb-4 text-xl font-semibold font-pr">دعم للشركات المحلية
                                </h5>
                                <p class="font-sec text-justify">
                                    نهدف إلى تقديم الدعم والتشجيع للشركات المحلية في المملكة العربية السعودية. نؤمن بأهمية
                                    تعزيز الاقتصاد المحلي من خلال دعم الشركات الصغيرة والمتوسطة وتعزيز نموها وازدهارها.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div
                            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <div class="flex justify-center">
                                <div
                                    class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md bg-pr_dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12">
                                        <path fill="#ffffff"
                                            d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6">
                                <h5 class="mb-4 text-xl font-semibold font-pr">تشمل العديد من الفئات</h5>
                                <p class="font-sec text-justify">
                                    تشمل العديد من الفئات" تضمن لك تجربة تسوق شاملة ومتكاملة تتضمن مجموعة واسعة من الفئات
                                    والمنتجات المختلفة. بغض النظر عن اهتماماتك أو احتياجاتك
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>
        <!-- Container for demo purpose -->

    </div>

    {{-- FAQs --}}
    {{-- //////////// FAQs /////////////////// --}}
    <div class="flex justify-center items-start mb-8 mx-auto max-w-screen-xl">
        <div class="w-full xl:px-0 px-6 ">
            <h2 class="font-pr text-5xl text-center">الاسئلة الشائعة</h2>
            <ul class="flex flex-col mt-4">
                <li class="bg-pr_dark my-2 shadow-lg" x-data="accordion(1)">
                    <h2 @click="handleClick()" class="flex flex-row justify-between items-center p-3 cursor-pointer">
                        <span class="font-sec text-white text-2xl">ما هي أنواع العلامات التجارية المعروضة </span>
                        <svg :class="handleRotate()"
                            class="fill-current text-tawsila-600 h-6 min-w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-8 border-pr overflow-hidden bg-white max-h-0 duration-500 transition-all bg-soft_black">
                        <p class="p-3 text-pr_dark font-pr text-xl ">نقدم مجموعة متنوعة من العلامات التجارية السعودية المحلية في مختلف الصناعات بما في ذلك الموضة، الإلكترونيات، السلع المنزلية، الأطعمة والمشروبات، الصحة والجمال، والمزيد.
                        </p>
                    </div>
                </li>
                <li class="bg-pr_dark my-2 shadow-lg" x-data="accordion(2)">
                    <h2 @click="handleClick()" class="flex flex-row justify-between items-center p-3 cursor-pointer">
                        <span class="font-sec text-white text-2xl">كيف يمكنني تسجيل علامتي التجارية </span>
                        <svg :class="handleRotate()"
                            class="fill-current text-tawsila-600 h-6 min-w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-8 border-pr overflow-hidden bg-white max-h-0 duration-500 transition-all bg-soft_black">
                        <p class="p-3 text-pr_dark font-pr text-xl ">إذا كنت مالكًا لعلامة تجارية محلية ترغب في عرض منتجاتك، فقط قم بالتسجيل كمالك لعلامة تجارية على منصتنا واتبع الخطوات السهلة لإضافة علامتك التجارية إلى قائمة منتجاتنا.
                        </p>
                    </div>
                </li>
                <li class="bg-pr_dark my-2 shadow-lg" x-data="accordion(3)">
                    <h2 @click="handleClick()" class="flex flex-row justify-between items-center p-3 cursor-pointer">
                        <span class="font-sec text-white text-2xl">هل يمكن للعملاء الثقة في جودة المنتجات </span>
                        <svg :class="handleRotate()"
                            class="fill-current text-tawsila-600 h-6 min-w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-8 border-pr overflow-hidden bg-white max-h-0 duration-500 transition-all bg-soft_black">
                        <p class="p-3 text-pr_dark font-pr text-xl ">بالتأكيد! نحن نضمن أن جميع العلامات التجارية المعروضة على منصتنا تلبي معايير الجودة وتقدم منتجات أصلية. رضا العملاء والثقة هما أولويتنا الأساسية.
                        </p>
                    </div>
                </li>
                <li class="bg-pr_dark my-2 shadow-lg" x-data="accordion(4)">
                    <h2 @click="handleClick()" class="flex flex-row justify-between items-center p-3 cursor-pointer">
                        <span class="font-sec text-white text-2xl">هل تقدمون دعمًا للشركات المحلية</span>
                        <svg :class="handleRotate()"
                            class="fill-current text-tawsila-600 h-6 min-w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-8 border-pr overflow-hidden bg-white max-h-0 duration-500 transition-all bg-soft_black">
                        <p class="p-3 text-pr_dark font-pr text-xl ">نعم، نحن ملتزمون بدعم الشركات المحلية في المملكة العربية السعودية. سواء كنت شركة ناشئة أو علامة تجارية مُعتمدة
                        </p>
                    </div>
                </li>
                <li class="bg-pr_dark my-2 shadow-lg" x-data="accordion(5)">
                    <h2 @click="handleClick()" class="flex flex-row justify-between items-center p-3 cursor-pointer">
                        <span class="font-sec text-white text-2xl">هل هناك فوائد للعملاء الذين يسجلون</span>
                        <svg :class="handleRotate()"
                            class="fill-current text-tawsila-600 h-6 min-w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-8 border-pr overflow-hidden bg-white max-h-0 duration-500 transition-all bg-soft_black">
                        <p class="p-3 text-pr_dark font-pr text-xl ">نعم بالتأكيد! من خلال التسجيل على منصتنا، تحصل العملاء على فرصة الوصول إلى صفقات حصرية وعروض وتحديثات حول العلامات التجارية المحلية المفضلة لديهم.
                        </p>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    {{-- //////////// FAQs script /////////////////// --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
@endsection()
