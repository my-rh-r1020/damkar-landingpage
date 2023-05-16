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

            <nav class="nav-menu hidden lg:block">
                <a href="/" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Beranda</span>
                    <div class="{{ $title === "Damkar Kota Tanjungpinang" ? 'nav-active' : 'hidden' }}"></div>
                </a>
                <a href="/profile" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Profil</span>
                    <div class="{{ $title === "Profil Damkar Kota Tanjungpinang" ? 'nav-active' : 'hidden' }}"></div>
                </a>
                <a href="/berita" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Berita</span>
                    <div class="{{ $title === "Berita Damkar Kota Tanjungpinang" ? 'nav-active' : 'hidden' }}"></div>
                </a>
                <a href="/informasi" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Informasi Data</span>
                    <div class="{{ $title === "Grafik Kebakaran" ? 'nav-active' : 'hidden' }}"></div>
                </a>
                <a href="/gallery" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Galery</span>
                    <div class="{{ $title === "Gallery Kegiatan" ? 'nav-active' : 'hidden' }}"></div>
                </a>
                <a href="/pelatihan" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Edu Damkar</span>
                </a>
                <a href="/insendentil" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Insendentil</span>
                </a>
                <a href="/permohonan" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Permohonan</span>
                </a>
                <a href="/redkar" class="relative mx-[12px] hover:text-greyColorAlt transition duration-300">
                    <span>Red Kar</span>
                    <div class="{{ $title === "Redkar Damkar" ? 'nav-active' : 'hidden' }}"></div>
                </a>
            </nav>

            <div class="nav-btn">
                <div class="hidden lg:block mr-6">
                    <button id="search-btn" class="block close-btn-hover hover:text-white" name="search-btn" type="button"><i class='bx bx-search-alt-2 text-2xl'></i></button>
                </div>
                <button id="hamburger" name="hamburger" type="button" class="block transition duration-300 hover:bg-redColor hover:text-white py-1 px-2 rounded-xl scale-75 lg:hidden ml-auto mr-1">
                    <i class='bx bx-menu text-5xl'></i>
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
            <div class="top-0 right-4 p-4">
                <button id="close-btn" name="close-btn" type="button" class="close-btn-hover focus:outline-none scale-75">
                    <i class='bx bx-x text-5xl text-white'></i>
                </button>
            </div>
        </div>
        {{-- Sidebar Menu --}}
        <ul class="mt-14">
            <li class="sidebar-menu-list"><a href="/"><span class="sidebar-menu-text">Beranda</span></a></li>
            <li class="sidebar-menu-list"><a href="/profile" class="mb-2"><span class="sidebar-menu-text">Profil</span></a></li>
            <li class="sidebar-menu-list"><a href="/berita" class="mb-2"><span class="sidebar-menu-text">Berita</span></a></li>
            <li class="sidebar-menu-list"><a href="#" class="mb-2"><span class="sidebar-menu-text">Informasi Data</span></a></li>
            <li class="sidebar-menu-list"><a href="/gallery" class="mb-2"><span class="sidebar-menu-text">Galery</span></a></li>
            <li class="sidebar-menu-list"><a href="/pelatihan" class="mb-2"><span class="sidebar-menu-text">Edu Damkar</span></a></li>
            <li class="sidebar-menu-list"><a href="/insendentil" class="mb-2"><span class="sidebar-menu-text">Insendentil</span></a></li>
            <li class="sidebar-menu-list"><a href="/permohonan" class="mb-2"><span class="sidebar-menu-text">Permohonan</span></a></li>
            <li class="sidebar-menu-list"><a href="/redkar" class="mb-2"><span class="sidebar-menu-text">Red Kar</span></a></li>
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
        <button id="search-close-btn" name="search-close-btn" type="button" class="close-btn-hover hover:text-white focus:outline-none scale-75">
            <i class='bx bx-x text-5xl'></i>
        </button>
        <input type="text" placeholder="Search ..." class="text-3xl bg-white focus:outline-none focus:shadow-outline border border-white border-b-slate-600 py-4 block w-full appearance-none leading-normal">
    </div>
</div>