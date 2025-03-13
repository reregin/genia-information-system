<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{config('app.name', 'System Info Lab')}}</title>
    @yield('style')
</head>

<body class="overflow-x-hidden">

    <nav style="z-index: 2;" class="relative">
        <div class="max-w-full flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex items-center flex-shrink-0 text-black mr-6">
                <span class="font-semibold text-xl tracking-tight">POKOKNYA LOGO</span>
            </div>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 md:p-0 md:flex-row md:space-x-8">
                    <li>
                        <a href="/login"
                            class="block py-2 px-3 text-blue-700 rounded hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-2 flex items-center justify-center"
                            style="padding: 12px 0px;">
                            Sign In
                        </a>
                    </li>
                    <li>
                        <a href="/register"
                            class="block py-2 px-3 text-white font-sfpro text-base rounded-3xl bg-[#001CB1] md:border-0 md:p-2 dark:text-white"
                            style="padding: 12px 24px; text-align: center;">
                            Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="text-xs md:text-base max-w-full mt-[0.1px] font-medium md:mt-auto mx-auto px-4">
            @if(count($path) != 1)
                @for ($i = 0; $i < count($path); $i++)
                    <span>{{ $path[$i] }}</span>
                    @if($i < count($path) - 1)
                        <span> > </span>
                    @endif
                @endfor
            @endif
        </div>
    </nav>

    <main style="position:relative; z-index: 2;">
        @yield('content')
    </main>

    <footer class="bg-[#f5f8f9]">
        <div class="max-w-full w-full mx-auto p-4 md:flex md:items-center md:justify-between border-t-2 border-gray-300"
            style="margin-top: 50px; margin-bottom: 0;">
            <span class="text-sm sm:text-center">
                Copyright © 2025 UKM Genia
            </span>
        </div>
    </footer>

</body>

<script>
    document.querySelector('[data-collapse-toggle]').addEventListener('click', function () {
        var target = document.getElementById(this.getAttribute('data-collapse-toggle'));
        target.classList.toggle('hidden');
    });
</script>

</html>