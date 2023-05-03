{{-- <header class="bg-white">
    <div class="main-layout pt-[2px] pb-[5px]">
        <div class="flex flex-wrap justify-between">
            <div class="py-[9px] pl-[15px]">
                <a href="/">
                    <div class="flex flex-wrap items-center text-[18px]">
                        <img src="images/logo-damkar.png" alt="damkar-logo" class="w-[70px]">
                        <span class="uppercase font-bebasNeue ml-[6px] leading-none">Dinas Pemadam Kebakaran<br> dan Penyelamatan</span>
                    </div>
                </a>
            </div>

            <nav class="nav-menu">
                <a href="#"><span class="nav-span">Beranda</span></a>
                <a href="#"><span class="nav-span">Berita</span></a>
                <a href="#"><span class="nav-span">Profil</span></a>
                <a href="#"><span class="nav-span">Informasi Data</span></a>
                <a href="#"><span class="nav-span">Galery</span></a>
                <a href="#"><span class="nav-span">Edu Damkar</span></a>
                <a href="#"><span class="nav-span">Pojok Damkar</span></a>
            </nav>

            <div class="flex flex-wrap items-center text-blackColor font-bebasNeue">
                <button><i class='bx bx-search text-2xl'></i></button>
            </div>
        </div>
    </div>
</header> --}}

<header class="bg-white">
    <div class="main-layout pt-[2px] pb-[5px]">
        <div class="flex items-center justify-between relative">
            {{-- Logo --}}
            <div class="py-[9px] pl-[15px]">
                <a href="/">
                    <div class="flex flex-wrap items-center text-[18px]">
                        <img src="/images/logo-damkar.png" alt="damkar-logo" class="w-[70px]">
                        <span class="uppercase font-bebasNeue ml-[6px] leading-none">Dinas Pemadam Kebakaran<br> dan Penyelamatan</span>
                    </div>
                </a>
            </div>

            {{-- Nav Menu --}}
            {{-- <nav class="nav-menu hidden lg:block">
                <a href="#"><span class="nav-span">Beranda</span></a>
                <a href="#"><span class="nav-span">Berita</span></a>
                <a href="#"><span class="nav-span">Profil</span></a>
                <a href="#"><span class="nav-span">Informasi Data</span></a>
                <a href="#"><span class="nav-span">Galery</span></a>
                <a href="#"><span class="nav-span">Edu Damkar</span></a>
                <a href="#"><span class="nav-span">Pojok Damkar</span></a>
            </nav> --}}
            <nav class="nav-menu hidden lg:block">
                <a href="#" class="relative mx-[12px]">
                    <span>Beranda</span>
                    <div class="nav-active"></div>
                </a>
                <a href="#berita" class="relative mx-[12px]">
                    <span>Berita</span>
                </a>
                <a href="#"><span class="nav-span">Profil</span></a>
                <a href="#"><span class="nav-span">Informasi Data</span></a>
                <a href="#"><span class="nav-span">Galery</span></a>
                <a href="#"><span class="nav-span">Edu Damkar</span></a>
                <a href="#"><span class="nav-span">Pojok Damkar</span></a>
                <a href="/permohonan"><span class="nav-span">Permohonan</span></a>
            </nav>

            <div class="nav-btn">
                <div class="hidden lg:block mr-6">
                    <button id="search-btn" class="block transition duration-300 hover:bg-redColor hover:text-white px-[9px] py-[6px] rounded-full" name="search-btn" type="button"><i class='bx bx-search-alt-2 text-2xl'></i></button>
                </div>
                {{-- <div class="mr-1 lg:mr-0">
                    <a href="/elapor" target="_blank">
                        <span class="px-4 py-2 bg-redColor font-bebasNeue text-white hover:bg-redColorAlt rounded-md">E-Lapor</span>
                    </a>
                </div> --}}
                <button id="hamburger" name="hamburger" type="button" class="block py-2 px-3 rounded-xl bg-slate-200 scale-75 lg:hidden ml-auto mr-1">
                    <span class="nav-hamburger-line"></span>
                    <span class="nav-hamburger-line"></span>
                    <span class="nav-hamburger-line"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<div class="sidebar-menu hidden lg:hidden" id="sidebar">
    <nav class="fixed top-10 left-4 right-0 bottom-0 flex flex-col transform ease-in-out duration-500 sm:duration-700">
        <div class="flex items-center justify-between">
            <div class="py-[9px] pl-[9px]">
                <a href="/">
                    <div class="flex flex-wrap items-center text-[18px]">
                        <img src="/images/logo-damkar.png" alt="damkar-logo" class="w-[70px]">
                        <span class="uppercase text-white font-bebasNeue ml-[6px] leading-none">Dinas Pemadam Kebakaran<br> dan Penyelamatan</span>
                    </div>
                </a>
            </div>
            <div class="absolute top-0 right-4 p-4">
                <button id="close-btn" name="close-btn" type="button" class="focus:outline-none scale-75">
                    <span class="nav-close-line origin-top-left rotate-45"></span>
                    <span class="nav-close-line scale-0"></span>
                    <span class="nav-close-line origin-bottom-left -rotate-45"></span>
                </button>
            </div>
        </div>
        {{-- Sidebar Menu --}}
        <ul class="mt-14">
            <li class="sidebar-menu-list"><a href="#"><span class="sidebar-menu-text">Beranda</span></a></li>
            <li class="sidebar-menu-list"><a href="#" class="mb-2"><span class="sidebar-menu-text">Berita</span></a></li>
            <li class="sidebar-menu-list"><a href="#" class="mb-2"><span class="sidebar-menu-text">Profil</span></a></li>
            <li class="sidebar-menu-list"><a href="#" class="mb-2"><span class="sidebar-menu-text">Informasi Data</span></a></li>
            <li class="sidebar-menu-list"><a href="#" class="mb-2"><span class="sidebar-menu-text">Galery</span></a></li>
            <li class="sidebar-menu-list"><a href="#" class="mb-2"><span class="sidebar-menu-text">Edu Damkar</span></a></li>
            <li class="sidebar-menu-list"><a href="#" class="mb-2"><span class="sidebar-menu-text">Pojok Damkar</span></a></li>
        </ul>

        <!-- Search Bar -->
        <div class="mt-4 mb-8 mr-4">
            <input type="text" placeholder="Search" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal">
        </div>

        <hr class="border-slate-700 mr-4">        
    </nav>
</div>

{{-- Search Form --}}
<div class="search-bar hidden" id="search-form">
    <div class="fixed top-0 left-60 right-60 bottom-0 flex flex-col items-end justify-center">
        <button id="search-close-btn" name="search-close-btn" type="button" class="focus:outline-none scale-75">
            <span class="search-btn-close origin-top-left rotate-45"></span>
            <span class="search-btn-close scale-0"></span>
            <span class="search-btn-close origin-bottom-left -rotate-45"></span>
        </button>
        <input type="text" placeholder="Search ..." class="text-3xl bg-white focus:outline-none focus:shadow-outline border border-white border-b-slate-600 py-4 block w-full appearance-none leading-normal">
    </div>
</div>

{{-- <div class="sidebar-menu hidden lg:hidden" id="sidebar">
    <nav class="fixed top-0 left-4 right-0 bottom-0 flex flex-col items-start justify-center transform ease-in-out duration-500 sm:duration-700">
        <div class="flex items-center justify-between">
            <div class="py-[9px] pl-[15px]">
                <a href="/">
                    <div class="flex flex-wrap items-center text-[18px]">
                        <img src="images/logo-damkar.png" alt="damkar-logo" class="w-[70px]">
                        <span class="uppercase font-bebasNeue ml-[6px] leading-none">Dinas Pemadam Kebakaran<br> dan Penyelamatan</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="close-button absolute top-0 right-0 p-4">
            <button type="button" class="focus:outline-none" id="close-btn" name="close-btn">
                <span class="nav-close-line origin-top-left rotate-45"></span>
                <span class="nav-close-line scale-0"></span>
                <span class="nav-close-line origin-bottom-left -rotate-45"></span>
            </button>
        </div>
        <a href="#" class="text-gray-800 text-2xl font-medium py-2 hover:bg-gray-300 transition ease-in-out duration-500 sm:duration-700">Menu 1</a>
        <a href="#" class="text-gray-800 text-2xl font-medium py-2 hover:bg-gray-300 transition ease-in-out duration-500 sm:duration-700">Menu 2</a>
        <a href="#" class="text-gray-800 text-2xl font-medium py-2 hover:bg-gray-300 transition ease-in-out duration-500 sm:duration-700">Menu 3</a>
    </nav>
</div> --}}