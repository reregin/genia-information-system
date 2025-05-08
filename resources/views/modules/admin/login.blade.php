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

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition @error('email') border-red-500 @enderror"
                               placeholder="admin@example.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input id="password" type="password" name="password" required
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition @error('password') border-red-500 @enderror"
                               placeholder="••••••••">
                         @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center justify-between">
                        <label for="remember" class="flex items-center space-x-2">
                            <input id="remember" type="checkbox" name="remember"
                                   class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                        Sign In
                    </button>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-gray-600 text-sm">© 2025 UKM Genia</p>
        </div>
    </div>
</body>
</html>
