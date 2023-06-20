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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Font Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section>
        @include('components.pages.user.dashboard.sidebar')

        @include('components.pages.user.dashboard.header')
    
        <div class="p-4 sm:ml-64 bg-gray-100">
            <div class="px-3 py-6 rounded-lg">
                @yield('dashboardBody')            
            </div>
        </div>
    </section>



    {{-- JS Scripts --}}
    <script src="/js/myscript.js"></script>

    <!-- Initialize Scripts -->
    @stack('scripts')
</body>

</html>