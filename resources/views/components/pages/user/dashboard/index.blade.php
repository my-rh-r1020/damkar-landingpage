{{-- <section>
    <div class="flex">
        <div class="w-full lg:w-1/5">
            <div class="px-8 py-12">
                <div class="mb-12">
                    <a href="/dashboard">
                        <div class="flex items-center">
                            <img src="images/logo-tpi-damkar.png" alt="disdamkarmat-logo" class="w-[50%]">
                            <span class="text-xl font-semibold">Disdamkarmat</span>
                        </div>
                    </a>
                </div>
                <div class="mb-12">
                    <h5 class="text-[#ABB3C4] text-sm mb-2">Dashboard</h5>
                    <a href="#" class="block">
                        <div class="flex items-center gap-x-4 bg-blue-400 text-white px-3 py-2 rounded-md">
                            <i class='bx bx-grid-alt text-xl'></i>
                            <span class="text-base">Overview</span>
                        </div>
                    </a>
                </div>
                <div>
                    <h5 class="text-[#ABB3C4] text-sm mb-2">Others</h5>
                    <a href="#" class="block mb-4">
                        <div class="flex items-center gap-x-4 bg-white hover:bg-blue-400 text-blackColor hover:text-white px-3 py-2 rounded-md">
                            <i class='bx bx-cog text-xl'></i>
                            <span class="text-base">Settings</span>
                        </div>
                    </a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-x-4 bg-white hover:bg-blue-400 text-blackColor hover:text-white px-3 py-2 rounded-md">
                            <i class='bx bx-exit text-xl'></i>
                            <span class="text-base">Logout</span>
                        </button>
                    </form>
                    <a href="#" class="block">
                        <div class="flex items-center gap-x-4 bg-white hover:bg-blue-400 text-blackColor hover:text-white px-3 py-2 rounded-md">
                            <i class='bx bx-exit text-xl'></i>
                            <span class="text-base">Logout</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-10/12 bg-bgGreyColor">
        </div>
    </div>
</section> --}}

{{-- <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="flex flex-col flex-shrink-0 w-64 bg-white border-r">
        <div class="flex items-center justify-center h-14 border-b">
            <span class="font-semibold text-xl">Dashboard</span>
        </div>
        <nav class="flex-grow">
            <ul class="flex flex-col py-4">
                <li class="px-6 py-2 hover:bg-gray-200">
                    <a href="#" class="block">Menu 1</a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-200">
                    <a href="#" class="block">Menu 2</a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-200">
                    <a href="#" class="block">Menu 3</a>
                </li>
                <li class="px-6 py-2 hover:bg-gray-200">
                    <a href="#" class="block">Menu 4</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col flex-grow">
        <header class="flex items-center justify-between p-4 bg-white border-b">
            <div class="flex items-center">
                <button class="p-2 mr-2 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                        <path d="M3 12h18M3 6h18M3 18h18"></path>
                    </svg>
                </button>
                <h1 class="text-xl font-semibold">Dashboard</h1>
            </div>
            <div class="flex items-center">
                <span class="text-gray-500">John Doe</span>
                <img src="avatar.jpg" alt="Avatar" class="w-8 h-8 ml-2 rounded-full">
            </div>
        </header>
        <main class="p-4">
            <!-- Konten dashboard -->
            <div class="bg-white rounded shadow p-6">
                <h2 class="text-lg font-semibold mb-4">Welcome, John Doe!</h2>
                <p>This is your dashboard content.</p>
            </div>
        </main>
    </div>
</div> --}}

<section>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="fixed-sidebar flex flex-col flex-shrink-0 w-64 bg-white border-r">
            <header class="my-6">
                <a href="/dashboard">
                    <div class="flex items-center justify-center gap-2">
                        <img src="images/logo-damkar.png" alt="disdamkarmat-logo" class="w-[70px]">
                        <span class="text-lg font-semibold">Disdamkarmat</span>
                    </div>
                </a>
            </header>
            <nav class="flex-grow py-6">
                <ul class="flex flex-col px-3">
                    <h5 class="text-[#ABB3C4] text-sm mb-2">Overview</h5>
                    <li class="sidebar-listmenu">
                        <a href="/dashboard" class="block">
                            <div class="flex items-center gap-x-4">
                                <i class='bx bx-grid-alt text-xl'></i>
                                <span class="text-base">Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <li class="sidebar-listmenu">
                        <a href="#" class="block">
                            <div class="flex items-center gap-x-4">
                                <i class='bx bx-grid-alt text-xl'></i>
                                <span class="text-base">Menu 2</span>
                            </div>
                        </a>
                    </li>

                    <h5 class="text-[#ABB3C4] text-sm mb-2 mt-6">Data</h5>
                    <li class="sidebar-listmenu">
                        <a href="#" class="block">
                            <div class="flex items-center gap-x-4">
                                <i class='bx bxs-data text-xl'></i>
                                <span class="text-base">Danru</span>
                            </div>
                        </a>
                    </li>
                    <li class="sidebar-listmenu">
                        <a href="#" class="block">
                            <div class="flex items-center gap-x-4">
                                <i class='bx bxs-data text-xl'></i>
                                <span class="text-base">Berita</span>
                            </div>
                        </a>
                    </li>
                    <li class="sidebar-listmenu">
                        <a href="#" class="block">
                            <div class="flex items-center gap-x-4">
                                <i class='bx bxs-data text-xl'></i>
                                <span class="text-base">Kegiatan</span>
                            </div>
                        </a>
                    </li>

                    <h5 class="text-[#ABB3C4] text-sm mb-2 mt-6">Insendentil</h5>
                    <li class="sidebar-listmenu">
                        <a href="#" class="block">
                            <div class="flex items-center gap-x-4">
                                <i class='bx bx-grid-alt text-xl'></i>
                                <span class="text-base">Menu 5</span>
                            </div>
                        </a>
                    </li>

                    <h5 class="text-[#ABB3C4] text-sm mb-2 mt-6">Others</h5>
                    <li class="sidebar-listmenu">
                        <a href="#" class="block">
                            <div class="flex items-center gap-x-4">
                                <i class='bx bx-cog text-xl'></i>
                                <span class="text-base">Settings</span>
                            </div>
                        </a>
                    </li>
                    <li class="sidebar-listmenu">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="w-full flex items-center gap-x-4 text-blackColor rounded-md">
                                <i class='bx bx-exit text-xl'></i>
                                <span class="text-base">Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    
        <!-- Main Content -->
        <div class="flex flex-col flex-grow">
            <header class="flex items-center justify-between p-4 bg-white border-b">
                <div>
                    <button class="p-2 text-gray-500">
                        <i class='bx bx-menu text-3xl'></i>
                    </button>
                </div>
                <div class="flex items-center mr-2">
                    <span class="text-gray-500">Admin Disdamkarmat</span>
                    <img src="/images/logo-damkar.png" alt="Avatar" class="w-10 h-10 ml-2 rounded-full">
                </div>
            </header>
            <main class="p-4">
                <!-- Konten dashboard -->
                <div class="bg-white rounded shadow p-6">
                    <h1 class="text-3xl font-semibold mb-8">Dashboard</h1>
                    <h2 class="text-lg font-semibold mb-4">Welcome Back, Admin Disdamkarmat</h2>
                    <p>This is your dashboard content.</p>
                </div>
            </main>
        </div>
    </div>
</section>