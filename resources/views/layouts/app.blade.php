<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{config('app.name', 'System Info Lab')}}</title>
    @yield('style')
</head>

<body class="bg-lp-mobile-gradient lg:bg-lp-desktop-gradient overflow-x-hidden">
    <div class="hidden lg:flex absolute top-0 left-0 w-full h-full" style="z-index: 1;">
        <svg class="absolute top-0 left-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" width="772" height="764"
            viewBox="0 0 772 764" fill="none">
            <g style="mix-blend-mode:multiply">
                <path
                    d="M688.44 -606C684.85 -598.276 681.304 -590.656 677.753 -583.103C623.873 -385.493 1012.29 542.506 512.44 727.5C-10.9368 921.201 -133.621 288.447 145.387 36.5217C541.934 -321.533 610.715 -440.521 677.753 -583.103C680.289 -592.405 683.805 -600.089 688.44 -606Z"
                    fill="url(#paint0_linear_51_2195)" />
            </g>
            <defs>
                <linearGradient id="paint0_linear_51_2195" x1="294.94" y1="-606" x2="925.323" y2="274.226"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B63E5" />
                    <stop offset="1" stop-color="white" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>

        <svg class="absolute top-0 left-0 w-full h-full transform mt-[512px] ml-80" xmlns="http://www.w3.org/2000/svg"
            width="946" height="764" viewBox="0 0 946 764" fill="none" style="flex-shrink: 0;">
            <g style="mix-blend-mode:multiply">
                <path
                    d="M1394.26 616.615C1386.29 613.597 1378.44 610.614 1370.65 607.622C1169.64 568.265 272.364 1023.18 51.4882 538.117C-179.785 30.2234 442.365 -138.179 713.925 121.757C1099.89 491.198 1223.56 551.138 1370.65 607.622C1380.11 609.475 1388.03 612.422 1394.26 616.615Z"
                    fill="url(#paint0_linear_51_2196)" />
            </g>
            <defs>
                <linearGradient id="paint0_linear_51_2196" x1="1365.63" y1="224.158" x2="533.605" y2="916.922"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B63E5" />
                    <stop offset="1" stop-color="white" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="flex lg:hidden absolute top-0 right-0 w-full h-full" style="z-index: 1;">
        <svg class="absolute top-[33px] right-0" xmlns="http://www.w3.org/2000/svg" width="353" height="764"
            viewBox="0 0 353 764" fill="none">
            <g style="mix-blend-mode:multiply">
                <path
                    d="M1394.26 616.615C1386.29 613.597 1378.44 610.614 1370.65 607.622C1169.64 568.265 272.364 1023.18 51.4882 538.117C-179.785 30.2234 442.365 -138.179 713.925 121.757C1099.89 491.198 1223.56 551.138 1370.65 607.622C1380.11 609.475 1388.03 612.422 1394.26 616.615Z"
                    fill="url(#paint0_linear_51_2553)" />
            </g>
            <defs>
                <linearGradient id="paint0_linear_51_2553" x1="1365.63" y1="224.158" x2="533.605" y2="916.922"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B63E5" />
                    <stop offset="1" stop-color="white" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
        <svg class="absolute top-0 right-0" xmlns="http://www.w3.org/2000/svg" width="375" height="1370"
            viewBox="0 0 375 1370" fill="none">
            <g style="mix-blend-mode:multiply">
                <path
                    d="M688.44 0C684.85 7.72441 681.304 15.3436 677.753 22.8965C623.873 220.507 1012.29 1148.51 512.44 1333.5C-10.9368 1527.2 -133.621 894.447 145.387 642.522C541.934 284.467 610.715 165.479 677.753 22.8965C680.289 13.5948 683.805 5.91142 688.44 0Z"
                    fill="url(#paint0_linear_51_2552)" />
            </g>
            <defs>
                <linearGradient id="paint0_linear_51_2552" x1="294.94" y1="0.000107241" x2="925.323" y2="880.226"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0B63E5" />
                    <stop offset="1" stop-color="white" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <nav style="z-index: 2;" class="relative px-4">
        <div class="max-w-full flex flex-wrap items-center justify-between mx-auto p-2">
        <!--logo-->
        <div class="items-center">
            <a class="flex flex-row items-center">
                <div class=" w-[240px] h-[80px]">
                    <img 
                        src="{{ asset('images/Logo Genia.svg') }}" 
                        alt="UKM Genia Logo"
                        class="object-contain w-[560px] h-[80px]"
                    />
                </div>
            </a>
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
         <!-- Navigation Links (Center Section) --> 
        <div class="flex flex-row p-4 md:p-0 mt-4 md:space-x-8">
            <a href="/" class="text-gray-700 hover:text-blue-700">Home</a>
            <a href="/about-us" class="text-gray-700 hover:text-blue-700">About Us</a>
            <a href="/awarded" class="text-gray-700 hover:text-blue-700">Awarded</a>
            <a href="/blog" class="text-gray-700 hover:text-blue-700">Blog</a>
        </div>

            <!-- <div class="hidden w-full md:block md:w-auto" id="navbar-default">
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
            </div> -->

            <!-- CTA Button -->
        <div class="hidden md:block">
            <a 
                
                class="inline-block px-6 py-2 border border-gray-900 rounded-full text-gray-900 hover:bg-gray-100 transition-colors font-figtree"
            >
                Get in touch
            </a>
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
                Copyright © 2024 LAB FT UNSRAT * All rights reserved.
            </span>
            <span class="text-sm">
                Version 1.0
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