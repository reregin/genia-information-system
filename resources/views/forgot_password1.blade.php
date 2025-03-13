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
            <h2 class="text-2xl font-medium text-center text-primary-900 mb-6">Lupa Kata Sandi </h2>
            <form class="w-full space-y-6" action="/check-email" method="GET">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" placeholder="satria@gmail.com" class="mt-1 block w-full p-2 border border-indigo-200 rounded-md shadow-sm focus:border-2 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <button type="submit" class="w-full py-3 bg-blue-800 text-white text-lg font-semibold rounded-md">Reset Kata Sandi</button>
                </div>
            </form>
        </div>
</body>
</html>
