<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Admin Login - UKM Genia</title>
    <link rel="icon" type="image/svg" href="{{ asset('images/UKM GENIA LOGO 1.svg') }}">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md px-4">
        <!-- Logo -->
        <div class="w-36 h-36 mx-auto p-4">
            <img src="{{ asset('images/UKM GENIA LOGO 1.svg') }}" alt="UKM Genia Logo"
                    class="object-contain w-full h-full">
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-semibold text-gray-800 mb-2">Admin Login</h1>
                <p class="text-gray-600">Sistem Informasi UKM Genia</p>
            </div>

            <!-- <form method="POST" action="#"> -->
                <div class="space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                               placeholder="admin@example.com">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                               placeholder="••••••••">
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="remember" 
                                   class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <!-- <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                        Sign In
                    </button> -->
                    <a href="{{ route('admin.dashboard') }}"
                    class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-lg transition-colors">
                        Sign In
                    </a>
                </div>
            <!-- </form> -->
        </div>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-gray-600 text-sm">© 2025 UKM Genia</p>
        </div>
    </div>
</body>
</html>