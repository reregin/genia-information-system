<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Forgot Password</title>
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-800 to-blue-950">
        <div class="mb-8">
            <div class="w-40 h-40 bg-gray-300 rounded-full"></div>
        </div>
        <div class=" bg-white shadow-sm w-full max-w-md p-8 rounded-xl">
            <h2 class="text-2xl text-center text-primary-900 mb-6 font-medium">Atur Kata Sandi Baru </h2>
            <form class="w-full space-y-6" action="/change-password" method="POST">
                <div class="mb-4">
                    <div class="flex justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    </div>
                    <div class="relative">
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="mt-1 block w-full p-2 border border-indigo-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <img class="h-5 w-5 cursor-pointer" id="toggle-password" src="{{ asset('images/eye.svg') }}" alt="Show password">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full py-3 bg-blue-800 text-white text-lg font-semibold rounded-md">Reset Kata Sandi</button>
                </div>
            </form>
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
