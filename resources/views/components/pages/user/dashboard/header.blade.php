<header class="flex items-center justify-between p-4 bg-white border-b">
    <div>
        <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
    </div>
    <div class="flex items-center">
        <div class="flex items-center ml-3 mr-2">
          <div>
            <button type="button" class="flex text-sm rounded-full focus:ring-2 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span class="sr-only">Open user menu</span>
              <img src="{{ asset('storage/profil-img/'.auth()->user()->avatar) }}" alt="Avatar" class="w-10 h-10 rounded-full">
              {{-- <img src="/assets/images/profile/{{ auth()->user()->avatar }}" alt="Avatar" class="w-10 h-10 rounded-full"> --}}
            </button>
          </div>
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
            <div class="px-4 py-3" role="none">
              <p class="text-sm text-gray-900" role="none">
                {{ auth()->user()->name }}
              </p>
              <p class="text-sm font-medium text-gray-900 truncate" role="none">
                {{ auth()->user()->email }}
              </p>
            </div>
            <ul class="py-1" role="none">
              <li>
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    <div class="flex items-center gap-x-2">
                        <i class='bx bxs-dashboard text-xl'></i>
                        <span class="text-base">Dashboard</span>
                    </div>
                </a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    <div class="flex items-center gap-x-2">
                        <i class='bx bx-cog text-gray-500 text-xl'></i>
                        <span class="text-base">Settings</span>
                    </div>
                </a>
              </li>
              <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-4 py-2 gap-x-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class='bx bx-exit text-gray-500 text-xl'></i>
                        <span class="text-base">Logout</span>
                    </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
    </div>
</header>