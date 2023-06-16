@php
$currentUrl = request()->url();
@endphp

<header class="bg-white">
    <div class="px-[10px] md:px-[20px] lg:px-[30px] xl:px-[50px] 2xl:px-[100px] pt-[2px] pb-[5px]">
        <nav class="flex items-center justify-between relative">
            <div class="py-[9px] pl-[15px]">
                <a href="/">
                    <img src="/images/logo-tpi-damkar.png" alt="logo-disdamkarmat" class="w-[130px]">
                </a>
            </div>
            <div class="hidden lg:block">
                <ul class="nav-menu gap-x-7">
                    <li class="relative">
                        <a href="/">
                            <span class="nav-link">Beranda</span>
                            <div class="{{ $url === "/" ? 'nav-active' : 'hidden' }}"></div>
                        </a>
                    </li>
                    <li class="dropdown-items">
                        <div class="nav-link">Profil
                            <div class="{{ $url === "/profile" ? 'nav-active' : 'hidden' }}"></div>
                        </div>
                        <ul class="dropdown-menu">
                            <li class="dropdown-list">
                                <div class="dropdown-list-href">
                                    <a href="/sejarah">Sejarah</a>
                                </div>
                            </li>
                            <li class="dropdown-list">
                                <div class="dropdown-list-href">
                                    <a href="#">Tupoksi</a>
                                </div>
                            </li>
                            <li class="dropdown-list">
                                <div class="dropdown-list-href">
                                    <a href="#">Struktur Organisasi</a>
                                </div>
                            </li>
                            <li class="dropdown-list">
                                <div class="dropdown-list-href">
                                    <a href="/danru">Danru</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="/berita">
                            <span class="nav-link">Berita</span>
                            <div class="{{ $url === "/berita" ? 'nav-active' : 'hidden' }}"></div>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="/grafik">
                            <span class="nav-link">Informasi Data</span>
                            <div class="{{ $url === "/grafik" ? 'nav-active' : 'hidden' }}"></div>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="/gallery">
                            <span class="nav-link">Galery</span>
                            <div class="{{ $url === "/gallery" ? 'nav-active' : 'hidden' }}"></div>
                        </a>
                    </li>
                    <li class="dropdown-items">
                        <div class="nav-link">Edu Damkar
                            <div class="{{ $url === "/edukasi" ? 'nav-active' : 'hidden' }}"></div>
                        </div>
                        <ul class="dropdown-menu">
                            <li class="dropdown-list">
                                <div class="dropdown-list-href">
                                    <a href="/edukasi">Pengetahuan</a>
                                </div>
                            </li>
                            <li class="dropdown-list">
                                <div class="dropdown-list-href">
                                    <a href="#">Himbauan</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="/insendentil">
                            <span class="nav-link">Insendentil</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="/redkar">
                            <span class="nav-link">Red Kar</span>
                            <div class="{{ $url === "/redkar" ? 'nav-active' : 'hidden' }}"></div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center">
                <a href="/elapor" class="bg-redColorAlt text-white text-[17px] font-bebasNeue hover:bg-[#C10221] py-1 px-5 xl:px-6 rounded-md">E-Lapor</a>
                <div id="nav-toggle" class="block cursor-pointer transition duration-300 hover:bg-redColor hover:text-white py-1 px-2 rounded-xl scale-75 lg:hidden ml-auto mr-1">
                    <i class='bx bx-menu text-5xl'></i>
                </div>
                {{-- <div class="hidden lg:block ml-2">
                    <button id="search-btn" class="block close-btn-hover hover:text-white" name="search-btn" type="button"><i class='bx bx-search-alt-2 text-2xl'></i></button>
                </div> --}}
                {{-- <button id="hamburger" name="hamburger" type="button" class="block transition duration-300 hover:bg-redColor hover:text-white py-1 px-2 rounded-xl scale-75 lg:hidden ml-auto mr-1">
                    <i class='bx bx-menu text-5xl'></i>
                </button> --}}
            </div>
        </nav>
    </div>
</header>

<!-- Sidebar -->
<div class="sidebar-menu hidden lg:hidden" id="sidebar">
    <nav class="fixed top-10 left-0 right-0 bottom-0 flex flex-col transform ease-in-out duration-500 sm:duration-700">
        <div class="flex items-center justify-between">
            <div class="py-[9px] pl-[9px]">
                <a href="/">
                    <img src="/images/logo-tpi-damkar.png" alt="logo-disdamkarmat" class="w-[130px]">
                </a>
            </div>
            <div class="top-0 right-4 p-4">
                <button id="close-btn" name="close-btn" type="button" class="close-btn-hover focus:outline-none scale-75">
                    <i class='bx bx-x text-5xl text-white'></i>
                </button>
            </div>
        </div>
        {{-- Sidebar Menu --}}
        <ul class="mt-14 mx-7">
            <li class="sidebar-menu-list"><a href="/"><span class="sidebar-menu-text">Beranda</span></a></li>
            <li class="sidebar-menu-list"><a href="/profile" class="mb-2"><span class="sidebar-menu-text">Profil</span></a></li>
            <li class="sidebar-menu-list"><a href="/berita" class="mb-2"><span class="sidebar-menu-text">Berita</span></a></li>
            <li class="sidebar-menu-list"><a href="/informasi" class="mb-2"><span class="sidebar-menu-text">Informasi Data</span></a></li>
            <li class="sidebar-menu-list"><a href="/gallery" class="mb-2"><span class="sidebar-menu-text">Galery</span></a></li>
            <li class="sidebar-menu-list"><a href="/edukasi" class="mb-2"><span class="sidebar-menu-text">Edu Damkar</span></a></li>
            <li class="sidebar-menu-list"><a href="/insendentil" class="mb-2"><span class="sidebar-menu-text">Insendentil</span></a></li>
            <li class="sidebar-menu-list"><a href="/redkar" class="mb-2"><span class="sidebar-menu-text">Red Kar</span></a></li>
        </ul>

        <!-- Search Bar -->
        {{-- <div class="mt-4 mb-8 mx-7">
            <input type="text" placeholder="Search" class="bg-white focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal">
        </div> --}}

        <hr class="border-slate-700 mt-6 mx-7">        
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