<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{config('app.name', 'Genia')}}</title>
    <link rel="icon" type="image/svg" href="{{ asset('images/UKM GENIA LOGO 1.svg') }}">
    @yield('style')
</head>

<body class="overflow-x-hidden">

    <nav style="z-index: 2;" class="relative px-4">
        <div class="max-w-full flex flex-wrap items-center justify-between mx-auto p-2">
            <!--logo-->
            <div class="items-center">
                <a class="flex flex-row items-center">
                    <div class="w-[180px] sm:w-[200px] md:w-[240px] h-[60px] sm:h-[70px] md:h-[80px]">
                        <img src="{{ asset('images/Group 3.png') }}" alt="UKM Genia Logo"
                            class="object-contain w-full h-full" />
                    </div>
                </a>
            </div>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <!-- Navigation Links (Center Section) -->
            <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
                <div class="flex flex-col p-4 lg:p-0 mt-4 lg:flex-row lg:space-x-8 lg:mt-0">
                    <a href="/" class="block py-2 px-3 text-gray-700 hover:text-blue-700">Home</a>
                    <a href="/about-us" class="block py-2 px-3 text-gray-700 hover:text-blue-700">About Us</a>
                    <a href="{{ route('awarded') }}" class="block py-2 px-3 text-gray-700 hover:text-blue-700">Awarded</a>
                    <a href="{{ route('competition') }}" class="block py-2 px-3 text-gray-700 hover:text-blue-700">Competition</a>
                    <a href="{{ route('blog') }}" class="block py-2 px-3 text-gray-700 hover:text-blue-700">Blog</a>
                    <a href="{{ route('news') }}" class="block py-2 px-3 text-gray-700 hover:text-blue-700">News</a>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="hidden lg:block">
                <a
                    class="inline-block px-6 py-2 border border-gray-900 rounded-full text-gray-900 hover:bg-gray-100 transition-colors font-figtree">
                    Get in touch
                </a>
            </div>
        </div>
        <div class="text-xs sm:text-sm md:text-base max-w-full mt-[0.1px] font-medium md:mt-auto mx-auto px-4">
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

    <footer class="w-screen min-h-[550px] bg-[#001D3D] flex flex-col text-white">
        <div class="max-w-7xl mx-auto px-4 py-8 md:py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 md:gap-12">
            <!-- Grid 1: Logo Section -->
            <div class="flex justify-center sm:justify-start">
                <img src="{{ asset('images/genia-white.png') }}" alt="UKM Genia Logo" class="h-12 sm:h-14 md:h-16 w-auto">
            </div>

            <!-- Grid 2: Right Section (Address + Social Media) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
                <!-- Grid 2.1: Address Section -->
                <div class="text-center sm:text-left">
                    <p class="text-sm sm:text-base">Universitas Sam Ratulangi, Manado</p>
                    <p class="mt-4 sm:mt-6 text-sm sm:text-base">
                        Kelurahan Bahu, Kecamatan Malalayang <br>
                        Kota Manado, Sulawesi Utara 95115
                    </p>
                    <p class="mt-4 sm:mt-6 text-sm sm:text-base">
                        Email: <a href="mailto:ukmgenia@unsrat.ac.id" class="underline">ukmgenia@unsrat.ac.id</a>
                    </p>
                </div>

                <!-- Grid 2.2: Social Media Section -->
                <div class="flex flex-col space-y-3 items-center sm:items-start">
                    <div>
                        <a href="#" class="flex items-center space-x-3 bg-gray-700 rounded-full px-3 sm:px-4 py-2 text-sm sm:text-base">
                            <img src="{{ asset('images/fbg.png') }}" alt="Facebook" class="h-5 sm:h-6 w-5 sm:w-6">
                            <span>Follow us on Facebook</span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center space-x-3 bg-gray-700 rounded-full px-3 sm:px-4 py-2 text-sm sm:text-base">
                            <img src="{{ asset('images/igg.png') }}" alt="Instagram" class="h-5 sm:h-6 w-5 sm:w-6">
                            <span>Follow us on Instagram</span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center space-x-3 bg-gray-700 rounded-full px-3 sm:px-4 py-2 text-sm sm:text-base">
                            <img src="{{ asset('images/lig.png') }}" alt="LinkedIn" class="h-5 sm:h-6 w-5 sm:w-6">
                            <span>Follow us on LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="flex-grow grid grid-cols-1 sm:grid-cols-2 gap-8 mt-8 md:mt-0">
            <!-- Grid 3: Picture -->
            <div class="h-full order-2 sm:order-1">
                <img src="{{ asset('images/Lines.png') }}" alt="Footer Image" class="h-full w-full object-cover">
            </div>

            <!-- Grid 4: Copyright -->
            <div class="flex justify-center sm:justify-end items-end pb-4 sm:mr-10 order-1 sm:order-2">
                <p class="text-sm sm:text-base">&copy; 2025 UKM Genia.</p>
            </div>
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