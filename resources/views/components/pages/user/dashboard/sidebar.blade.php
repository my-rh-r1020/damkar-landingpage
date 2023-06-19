<div class="fixed-sidebar flex flex-col flex-shrink-0 w-64 bg-white border-r">
    <header class="my-6">
        <a href="{{ route('dashboard') }}">
            <div class="flex items-center justify-center gap-2">
                <img src="/images/logo-damkar.png" alt="disdamkarmat-logo" class="w-[70px]">
                <span class="text-lg font-semibold">Disdamkarmat</span>
            </div>
        </a>
    </header>
    <nav class="flex-grow py-6">
        <ul class="flex flex-col px-3">
            <h5 class="text-[#ABB3C4] text-sm mb-2">Overview</h5>
            <li class="sidebar-listmenu">
                <a href="{{ route('dashboard') }}" class="block">
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
                <a href="{{ route('articles.index') }}" class="block">
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