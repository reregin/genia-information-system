<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Admin - UKM Genia</title>
    <link rel="icon" type="image/svg" href="{{ asset('images/UKM GENIA LOGO 1.svg') }}">
    <style>
        /* Smooth sidebar transition */
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar"
               class="sidebar fixed z-30 inset-y-0 left-0 w-64 bg-white shadow-lg transform -translate-x-full md:translate-x-0 md:static md:inset-0 flex flex-col">
            <div class="p-4 flex-shrink-0">
                <!-- Logo -->
                <div class="w-48 h-20 mx-auto">
                    <img src="{{ asset('images/Group 3.png') }}" alt="UKM Genia Logo"
                         class="object-contain w-full h-full">
                </div>
            </div>

            <!-- Navigation -->
            <nav class="mt-8 px-4 flex-grow overflow-y-auto">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg hover:text-blue-600 transition">
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.competition') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg hover:text-blue-600 transition">
                            <span class="ml-3">Competitions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.blog') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg hover:text-blue-600 transition">
                            <span class="ml-3">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg hover:text-blue-600 transition">
                            <span class="ml-3">News</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Logout Button -->
            <div class="p-4 mt-auto flex-shrink-0 border-t border-gray-200">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" 
                            class="flex items-center w-full p-3 text-red-600 hover:bg-red-50 rounded-lg hover:text-red-800 transition">
                        <!-- Optional: Add an icon here -->
                        <span class="ml-3">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col transition-all duration-300">
            <!-- Topbar (mobile only) -->
            <header class="bg-white shadow-sm md:hidden flex items-center justify-between px-4 py-3 border-b">
                <button id="menu-button" class="text-gray-500 focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                <h1 class="text-lg font-semibold text-gray-800">Genia</h1>
            </header>

            <!-- Topbar (desktop) -->
            <header class="bg-white shadow-sm hidden md:block">
                <div class="px-6 py-4 border-b">
                    <h1 class="text-xl font-semibold text-gray-800">Sistem Informasi UKM Genia</h1>
                </div>
            </header>

            <!-- Content section -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('admin-content')
            </main>

            <!-- Footer -->
            <footer class="border-t bg-white mt-auto px-6 py-4">
                <p class="text-gray-600 text-sm">© 2025 UKM Genia</p>
            </footer>
        </div>
    </div>

    <script>
        const menuBtn = document.getElementById('menu-button');
        const sidebar = document.getElementById('sidebar');

        // Toggle sidebar visibility on button click
        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent event from bubbling to document
            sidebar.classList.toggle('-translate-x-full');
        });

        // Hide sidebar when clicking outside
        document.addEventListener('click', (e) => {
            const isClickInsideSidebar = sidebar.contains(e.target);
            const isClickMenuButton = menuBtn.contains(e.target);

            // Only hide on mobile view
            const isMobile = window.innerWidth < 768; // md breakpoint

            if (!isClickInsideSidebar && !isClickMenuButton && isMobile && !sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.add('-translate-x-full');
            }
        });

        // Adjust sidebar based on resize
        window.addEventListener('resize', () => {
             if (window.innerWidth >= 768) { // md breakpoint
                sidebar.classList.remove('-translate-x-full'); // Show sidebar on desktop
            } else {
                sidebar.classList.add('-translate-x-full'); // Ensure it's hidden on mobile if not toggled
            }
        });

        // Initial check on load
        if (window.innerWidth < 768) {
             sidebar.classList.add('-translate-x-full');
        }

    </script>

</body>
</html>
