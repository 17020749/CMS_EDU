 <style>
        /* Custom styles */
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #e8e8e5;
            z-index: 10;
            display: none;
        }

        .fixed-header.active {
            display: block;
        }
    </style>
<!-- nav bar section -->
<nav class="flex flex-wrap items-center justify-between p-3 bg-[#e8e8e5]">

    <div class="text-xl">
        <img src="/images/thumbnail.png" alt="icoin đại diện"
        class="w-full h-12 object-cover">
            <!-- KHÁNH DECAL -->
    
    </div>
    <div class="flex md:hidden">
        <button id="hamburger">
          <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
          <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
   <!-- menu pc -->
    <ul class=" hidden w-full md:w-auto md:flex text-right text-bold mt-5 md:mt-0 md:border-none z-50">
        <li><a href="#home" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Trang trủ
        </a></li>
        <li><a href="#services" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Dịch vụ
        </a></li>
        <li
            class="relative flex items-center space-x-1 px-3 py-3 "
            x-data="{ open: false }"
            @mouseenter="open = true"
            @mouseleave="open = false"                            
            >
            <a
                class="hover:text-blue-500 md:border-none"
                href="#0"
                :aria-expanded="open"
            >Đồ chơi xe</a>
            <button
                class="shrink-0 p-1"
                :aria-expanded="open"
                @click.prevent="open = !open"
            >
                <span class="sr-only">Show submenu for "Flyout Menu"</span>
                <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                    <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                </svg>
            </button>
            <ul
                class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden"
                x-show="open"
                x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-out duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak
                @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)"
            >
                <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="9" height="12">
                                <path d="M8.724.053A.5.5 0 0 0 8.2.1L4.333 3H1.5A1.5 1.5 0 0 0 0 4.5v3A1.5 1.5 0 0 0 1.5 9h2.833L8.2 11.9a.5.5 0 0 0 .8-.4V.5a.5.5 0 0 0-.276-.447Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">ĐÈN TRỢ SÁNG</span>
                    </a>
                <ul class="origin-top-right absolute top-0 left-full min-w-[240px] bg-white border border-slate-200  rounded-lg shadow-xl" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Mạch 2S
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Mạch Bật Pha Đèn Sáng
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Mạch Passing SH
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Mạch Version
                        </a>
                    </li>
                </ul>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M11.953 4.29a.5.5 0 0 0-.454-.292H6.14L6.984.62A.5.5 0 0 0 6.12.173l-6 7a.5.5 0 0 0 .379.825h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Tay phanh, ốc</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M6 0a6 6 0 1 0 0 12A6 6 0 0 0 6 0ZM2 6a4 4 0 0 1 4-4v8a4 4 0 0 1-4-4Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Bô độ</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="11" height="11">
                                <path d="M10.866.134a.458.458 0 0 0-.481-.106L.302 3.695a.458.458 0 0 0-.014.856l4.4 1.76 1.76 4.4c.07.175.24.29.427.29h.007a.458.458 0 0 0 .424-.302L10.973.615a.458.458 0 0 0-.107-.48Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Tem hình dán</span>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="relative flex items-center space-x-1 px-3 py-3 "
            x-data="{ open: false }"
            @mouseenter="open = true"
            @mouseleave="open = false"                            
            >
            <a
                class="text-slate-800 hover:text-slate-900"
                href="/"
                :aria-expanded="open"
            >Flyout Menu</a>
            <button
                class="shrink-0 p-1"
                :aria-expanded="open"
                @click.prevent="open = !open"
            >
                <span class="sr-only">Show submenu for "Flyout Menu"</span>
                <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                    <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                </svg>
            </button>
            <ul
                class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden"
                x-show="open"
                x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-out duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak
                @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)"
            >
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="/pageTest">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="9" height="12">
                                <path d="M8.724.053A.5.5 0 0 0 8.2.1L4.333 3H1.5A1.5 1.5 0 0 0 0 4.5v3A1.5 1.5 0 0 0 1.5 9h2.833L8.2 11.9a.5.5 0 0 0 .8-.4V.5a.5.5 0 0 0-.276-.447Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Priority Ratings</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M11.953 4.29a.5.5 0 0 0-.454-.292H6.14L6.984.62A.5.5 0 0 0 6.12.173l-6 7a.5.5 0 0 0 .379.825h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Insights</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M6 0a6 6 0 1 0 0 12A6 6 0 0 0 6 0ZM2 6a4 4 0 0 1 4-4v8a4 4 0 0 1-4-4Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Item Mirror</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="11" height="11">
                                <path d="M10.866.134a.458.458 0 0 0-.481-.106L.302 3.695a.458.458 0 0 0-.014.856l4.4 1.76 1.76 4.4c.07.175.24.29.427.29h.007a.458.458 0 0 0 .424-.302L10.973.615a.458.458 0 0 0-.107-.48Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Support Center</span>
                    </a>
                </li>
            </ul>
        </li>
       <li><a href="#contactUs" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Liên hệ
       </a></li>
        
    </ul>
        <!-- menu mobile -->
     <ul class="hidden flex flex-col gap-2 w-full mx-auto md:hidden toggle">
        <li>
            <a href="/" class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">
                <span class="flex gap-2">


                    <img class="w-6 h-6 rounded-lg"
                        src="https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c"
                        alt="">

                    <span>
                        Trang tru
                    </span>
                </span>
            </a>
        </li>
        <li>
            <details class="group">

            <summary class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">

                <span class="flex gap-2">


                    <img class="w-6 h-6 rounded-lg"
                        src="https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c"
                        alt="">

                    <span>
                        Đồ chơi xe
                    </span>
                </span>
                <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </summary>

            <article class="px-4 pb-4">

                <ul class="flex flex-col gap-4 pl-2 mt-4">

                    <li class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                            </path>
                        </svg>

                        <div>
                            <details class="group">
                                <summary class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">
                                    <span class="flex gap-2">
                                        <img class="w-6 h-6 rounded-lg"
                                            src="https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c"
                                            alt="">
                                        <span>
                                            Đèn trợ sáng
                                        </span>
                                    </span>
                                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </summary>
                                <article class="px-4 pb-4">
                                    <ul class="flex flex-col gap-4 pl-2 mt-4">
                                        <li class="flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                                </path>
                                            </svg>

                                            <a href="http://127.0.0.1:8000/user/study-lists">
                                                Mạch 2S
                                            </a>
                                        </li>
                                        <li class="flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                                </path>
                                            </svg>

                                            <a href="http://127.0.0.1:8000/user/study-lists">
                                                Mạch Auto Passing
                                            </a>
                                        </li>
                                        <li class="flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                                </path>
                                            </svg>

                                            <a href="http://127.0.0.1:8000/user/study-lists">
                                                Mạch Bật Pha Đèn Sáng
                                            </a>
                                        </li>
                                        <li class="flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                                </path>
                                            </svg>

                                            <a href="http://127.0.0.1:8000/user/study-lists">
                                                Mạch Passing SH
                                            </a>
                                        </li>
                                        <li class="flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                                </path>
                                            </svg>

                                            <a href="http://127.0.0.1:8000/user/study-lists">
                                                Mạch Version
                                            </a>
                                        </li>
                                    </ul>
                                </article>
                            </details>
                        </div>
                    </li>


                    <li class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                            </path>
                        </svg>

                        <a href="http://127.0.0.1:8000/user/study-lists">
                            Study Lists
                        </a>
                    </li>


                    <li class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                            </path>
                        </svg>


                        <a href="http://127.0.0.1:8000/user/contribution">
                            Your contribution
                        </a>
                    </li>


                    <li class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                        </svg>


                        <a href="http://127.0.0.1:8000/user/settings">
                            Settings
                        </a>
                    </li>


                    <form action="http://127.0.0.1:8000/auth/logout" method="POST">
                        <input type="hidden" name="_token" value="ymEkCLBFpgkdaSbidUArRsdHbER5DkT6ByS3eJYb">
                        <button type="submit" class="text-red-500 text-sm px-2 py-1 hover:bg-red-200 rounded-md">
                            Log Out
                        </button>
                    </form>

                </ul>

            </article>

            </details>
        </li>

        <li>
            <details class="group">

            <summary
                class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">

                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>

                    <span>
                        Recent Documents
                    </span>
                </span>
                <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </summary>

            <article class="px-4 pb-4">
                <ul class="flex flex-col gap-1 pl-2">
                    <li><a href="">Document title</a></li>
                    <li><a href="">Document title</a></li>
                    <li><a href="">Document title</a></li>
                </ul>
            </article>

        </details>
        </li>

        <li>
            <details class="group">

            <summary
                class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">

                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>
                    <span>
                        Popular courses
                    </span>
                </span>
                <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>


            </summary>

            <article class="px-4 pb-4">
                <ul class="flex flex-col gap-1 pl-2">
                    <li><a href="">Course title</a></li>
                    <li><a href="">Course title</a></li>
                    <li><a href="">Course title</a></li>
                </ul>
            </article>

        </details>
        </li>

    </ul>
    <div class="toggle w-full text-end hidden md:flex md:w-auto px-2 py-2 md:rounded">
        <a href="tel:+123">
            <div class="flex justify-end">
                <div class="flex items-center h-10 w-30 rounded-md bg-[#c8a876] text-white font-medium p-2">
                    <!-- Heroicon name: phone -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    Call now
                </div>
            </div>
        </a>
    </div>

</nav>

<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
          navToggle.item(i).classList.toggle("hidden");
        }
      };
</script>