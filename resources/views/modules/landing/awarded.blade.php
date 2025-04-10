@extends('layouts.app', [
    'path' => ['Beranda', 'Awarded']
])

@section('title', 'Awarded Page')

@section('content')
    <div class="min-h-screen bg-white">
       <!-- Hero Section -->
       <section class="grid grid-cols-1 lg:grid-cols-2 min-h-[400px] lg:h-[600px]">
            <div class="flex flex-col justify-center p-6 sm:p-8 lg:p-16 space-y-4 sm:space-y-6 h-full">
                <h1 class="text-4xl sm:text-6xl lg:text-8xl font-normal leading-tight">
                    Make a Great Escalation
                </h1>
                <p class="text-base sm:text-lg text-[#646A69]">
                    Mereka Bisa, Teman-teman Juga Pasti Bisa! UKM Genia Membuka Jalammu Menuju Prestasi Nasional
                </p>
                <div>
                    <a href="{{ route('blog') }}"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 sm:py-3 px-5 sm:px-7 rounded-[200px] transition-colors">
                            Learn from them
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-center lg:justify-end order-first lg:order-last">
                <img src="{{ asset('images/fawg.svg') }}"
                    alt="Awarded"
                    class="w-full max-w-[400px] sm:max-w-[500px] lg:max-w-[600px] h-auto object-contain" />
            </div>
        </section>

        <!-- National Team Section 1 -->
        <section class="bg-white py-8 sm:py-12 px-4">
            <div class="w-full mx-auto bg-[#F7EFD9] rounded-lg px-4 sm:px-8 py-6 sm:py-8">
                <div class="mb-8 sm:mb-16">
                    <p class="text-sm text-gray-600 mb-2 pl-4 sm:pl-10">
                        Peringkat kompetisi
                    </p>
                    <div class="pl-4 sm:pl-10 pr-4 sm:pr-10">
                        <hr class="border-t border-gray-300">
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-8">
                    <div class="py-6 sm:py-10 space-y-4 pl-4 sm:pl-10">
                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-normal text-gray-900">
                            Tim Nasional
                        </h2>
                        <div class="mt-8 sm:mt-16">
                            <img src="{{ asset('images/pimnas.svg') }}"
                                alt="Pimnas logo"
                                class="max-w-full h-auto"/>
                        </div>
                        <h3 class="text-xl font-medium text-gray-800">
                            TIM PKM-PM
                        </h3>
                        <p class="text-base text-gray-700 leading-relaxed">
                            TIM PKM-PM Berhasil membawa Fakultas Teknik Menembus PIMNAS dengan karya "PAX-MENTIS: Audio Therapy dengan Muatan Afirmasi Positif sebagai Upaya Peningkatan 
                            Kualitas Hidup Lanjut Usia di Panti Werdha Damai Ranomuut"
                        </p>
                        <a href="{{ route('details_blog') }}" class="inline-block text-blue-600 hover:text-blue-700 hover:underline">
                            Read more
                        </a>
                    </div>

                    <div class="px-4 sm:px-0">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col gap-4">
                                <img src="{{ asset('images/g1lpim.svg') }}" alt="Landscape 1" class="w-full h-auto object-cover rounded-lg">
                                <img src="{{ asset('images/g2ppim.svg') }}" alt="Portrait 1" class="w-full h-auto object-cover rounded-lg">
                            </div>
                            <div class="flex flex-col gap-4">
                                <img src="{{ asset('images/g22ppim.svg') }}" alt="Portrait 2" class="w-full h-auto object-cover rounded-lg">
                                <img src="{{ asset('images/g22lpim.svg') }}" alt="Landscape 2" class="w-full h-auto object-cover rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- National Team Section 2 -->
        <section class="bg-white py-8 sm:py-12 px-4">
            <div class="w-full mx-auto bg-[#F7EFD9] rounded-lg px-4 sm:px-8 py-6 sm:py-8">
                <div class="mb-8 sm:mb-16">
                    <p class="text-sm text-gray-600 mb-2 pl-4 sm:pl-10">
                        Peringkat kompetisi
                    </p>
                    <div class="pl-4 sm:pl-10 pr-4 sm:pr-10">
                        <hr class="border-t border-gray-300">
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-8">
                    <div class="py-6 sm:py-10 space-y-4 pl-4 sm:pl-10">
                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-normal text-gray-900">
                            Tim Nasional
                        </h2>
                        <div class="mt-8 sm:mt-16">
                            <img src="{{ asset('images/gemastik-logo.svg') }}"
                                alt="Gemastik logo"
                                class="max-w-full h-auto"/>
                        </div>
                        <h3 class="text-xl font-medium text-gray-800">
                            TIM Penambangan Data
                        </h3>
                        <p class="text-base text-gray-700 leading-relaxed">
                            Tim PEKZPEKZ berhasil mengukir sejarah, Perdana membawa Prodi Informatika ketahap Nasional dalam kompetisi Gemastik ke 17 di Universitas Negeri Semarang dengan membawakan karya Ergonomi dalam Fasilitas Publik : Upaya Meningkatkan Mobilitas Lansia dengan Pendekatan Association Rule Mining
                        </p>
                        <a href="{{ route('details_blog') }}" class="inline-block text-blue-600 hover:text-blue-700 hover:underline">
                            Read more
                        </a>
                    </div>

                    <div class="px-4 sm:px-0">
                        <div class="grid grid-rows-2 gap-4">
                            <div class="flex flex-row gap-4 h-auto sm:h-[287px] aspect-[16/9]">
                                <img src="{{ asset('images/g1p.svg') }}" alt="Portrait 1" class="w-[150px] object-cover rounded-lg">
                                <div class="flex flex-col gap-4 flex-1">
                                    <img src="{{ asset('images/g2l.svg') }}" alt="Landscape 1" class="w-full h-full object-cover rounded-lg">
                                    <img src="{{ asset('images/g3l.svg') }}" alt="Landscape 2" class="w-full h-full object-cover rounded-lg">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <img src="{{ asset('images/g4l.svg') }}" alt="Landscape 3" class="w-full h-auto object-cover rounded-lg">
                                <img src="{{ asset('images/g5l.svg') }}" alt="Landscape 4" class="w-full h-auto object-cover rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- University Level Section -->
        <section class="bg-white py-8 sm:py-12 px-4">
            <div class="w-full bg-[#F7EFD9] rounded-lg px-4 sm:px-8 py-6 sm:py-8 mx-auto">
                <div class="mb-6 sm:mb-8">
                    <p class="text-sm text-gray-600 mb-2">
                        Peringkat kompetisi
                    </p>
                    <hr class="border-t border-gray-300">
                </div>

                <div class="mb-6 sm:mb-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">
                        Peringkat tingkat Universitas - Gelatik
                    </h2>
                    <p class="text-base text-gray-700 mt-4 leading-relaxed">
                        Seleksi yang diadakan melibatkan prodi Teknik Informatika Fakultas Teknik dan prodi Sistem Informasi Fakultas MIPA. Juri tiap divisi lomba akan melakukan evaluasi dan memutuskan 10 tim pada tiap divisi lomba untuk maju ke tingkat nasional. Silakan mengunduh SK dibawah untuk keterangan lebih detail
                    </p>
                </div>

                <div class="space-y-4">
                    <p class="text-base text-gray-700 leading-relaxed">
                        Informasi SK dibawah untuk keterangan lebih detail
                    </p>
                    <a href="#" class="inline-block text-blue-600 hover:text-blue-700 hover:underline">
                        Unduh
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection