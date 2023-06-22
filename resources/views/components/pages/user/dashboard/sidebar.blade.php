<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-lightGrey">
        <header class="mt-3 mb-8">
            <a href="{{ route('dashboard') }}">
                <div class="flex items-center justify-center gap-2">
                    <img src="/images/logo-damkar.png" alt="disdamkarmat-logo" class="w-[70px]">
                    <span class="text-lg font-semibold">Disdamkarmat</span>
                </div>
            </a>
        </header>
        <ul class="space-y-2 font-medium">
            <h5 class="sidebar-title">Overview</h5>
            <li>
                <a href="{{ route('dashboard') }}" class="sidebar-listmenu {{ Request::is('dashboard') ? 'sidebar-listmenu-active' : '' }}">
                    <i class='bx bxs-dashboard text-xl'></i>
                    <span class="text-base">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-listmenu">
                    <i class='bx bx-grid-alt text-gray-500 text-xl'></i>
                    <span class="text-base">Menu 2</span>
                </a>
            </li>

            <h5 class="sidebar-title pt-4">Data</h5>
            <li>
                <a href="{{ route('danru.index') }}" class="sidebar-listmenu {{ Request::is('dashboard/danru*') ? 'sidebar-listmenu-active' : '' }}">
                    <i class='bx bxs-data text-gray-500 text-xl'></i>
                    <span class="text-base">Danru</span>
                </a>
            </li>
            <li>
                <a href="{{ route('posts.index') }}" class="sidebar-listmenu {{ Request::is('dashboard/articles*') ? 'sidebar-listmenu-active' : '' }}">
                    <i class='bx bxs-data text-xl'></i>
                    <span class="text-base">Post</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-listmenu">
                    <i class='bx bxs-data text-gray-500 text-xl'></i>
                    <span class="text-base">Album</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-listmenu">
                    <i class='bx bxs-data text-gray-500 text-xl'></i>
                    <span class="text-base">Insendentil</span>
                </a>
            </li>

            <h5 class="sidebar-title pt-4">Others</h5>
            <li>
                <a href="#" class="sidebar-listmenu">
                    <i class='bx bx-cog text-gray-500 text-xl'></i>
                    <span class="text-base">Settings</span>
                </a>
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="w-full sidebar-listmenu">
                        <i class='bx bx-exit text-gray-500 text-xl'></i>
                        <span class="text-base">Logout</span>
                    </button>
                </form>
            </li>

            {{-- <li>
                <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>E-commerce</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-200">Products</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-200">Billing</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-200">Invoice</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                        <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                </a>
            </li> --}}
        </ul>
    </div>
</aside>