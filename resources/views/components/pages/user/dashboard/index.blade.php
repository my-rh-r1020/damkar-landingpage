<section>
    <div class="flex">
        <div class="w-full lg:w-3/12">
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
                    {{-- <a href="#" class="block">
                        <div class="flex items-center gap-x-4 bg-white hover:bg-blue-400 text-blackColor hover:text-white px-3 py-2 rounded-md">
                            <i class='bx bx-exit text-xl'></i>
                            <span class="text-base">Logout</span>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="w-full lg:w-9/12 bg-bgGreyColor">
        </div>
    </div>

    {{-- <span>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </span> --}}
</section>