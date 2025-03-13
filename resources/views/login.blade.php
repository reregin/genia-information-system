<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <style>
        .cursor-pointer {
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100 h-screen">
    <div class="flex flex-col md:flex-row bg-white h-full">
        <!-- Side form -->
        <div class="flex items-center justify-center w-full md:w-1/2 p-8">
            <div class="w-full max-w-lg p-8 bg-white">
                <div class="flex justify-center mb-6">
                    <div class="w-24 h-24 bg-gray-200 rounded-full"></div>
                </div>
                <div class="rounded-xl shadow-md pb-8 w-full max-w-md pt-8 px-10 py-10">
                    <h2 class="text-2xl font-semibold mb-6 text-center">Login to your account</h2>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" placeholder="satria@gmail.com" class="mt-1 block w-full p-2 border border-blue-200 rounded-md shadow-sm focus:border-2 focus:border-blue-700 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <a href="/forgot-password-1" class="text-sm text-blue-800 hover:text-blue-700 font-semibold">Lupa Kata Sandi</a>
                            </div>
                            <div class="relative">
                                <input type="password" name="password" id="password" placeholder="Enter your password" class="mt-1 block w-full p-2 border border-blue-200 rounded-md shadow-sm focus:ring-blue-700 focus:border-blue-700 sm:text-sm" required>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <img class="h-5 w-5 cursor-pointer" id="toggle-password" src="{{ asset('images/eye.svg') }}" alt="Show password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-blue-800 text-white py-2 rounded-md hover:bg-blue-400 font-semibold">Sign In</button>
                    </form>
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-400">Don't Have An Account? <a href="/register" class="text-blue-800 hover:text-blue-700 font-semibold">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right side image -->
        <div class="w-full md:w-1/2 h-64 md:h-full">
            <img src="{{ asset('images/rectangle-1451.png') }}" alt="Laboratorium Fakultas Teknik" class="w-full h-full object-cover">
        </div>
    </div>
    <script>
        document.getElementById('toggle-password').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            this.src = type === 'password' ? '{{ asset('images/eye.svg') }}' : '{{ asset('images/eye.svg') }}';
        });
    </script>
</body>
</html>
