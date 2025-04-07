<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Admin - UKM Genia</title>
    <link rel="icon" type="image/svg" href="{{ asset('images/UKM GENIA LOGO 1.svg') }}">
    @yield('style')
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="flex">
        <!-- Left Sidebar -->
        <aside class="bg-white w-64 min-h-screen shadow-lg fixed left-0">
            <div class="p-4">
                <!-- Logo -->
                <div class="w-48 h-20 mx-auto">
                    <img src="{{ asset('images/Group 3.png') }}" alt="UKM Genia Logo" 
                         class="object-contain w-full h-full">
                </div>

                <!-- Navigation -->
                <nav class="mt-8">
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg 
                                            hover:text-blue-600 transition-colors">
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg 
                                            hover:text-blue-600 transition-colors">
                                <span class="ml-3">Competitions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg 
                                            hover:text-blue-600 transition-colors">
                                <span class="ml-3">Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 rounded-lg 
                                            hover:text-blue-600 transition-colors">
                                <span class="ml-3">News</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64">
            <!-- Top Header -->
            <header class="bg-white shadow-sm">
                <div class="px-6 py-4 border-b">
                    <h1 class="text-xl font-semibold text-gray-800">Sistem Informasi UKM Genia</h1>
                </div>
            </header>

            <!-- Content Section -->
            <div class="p-6">
                @yield('admin-content')
            </div>

            <!-- Footer -->
            <footer class="border-t bg-white mt-auto">
                <div class="px-6 py-4">
                    <p class="text-gray-600 text-sm">© 2025 UKM Genia</p>
                </div>
            </footer>
        </main>
    </div>
</body>
</html>