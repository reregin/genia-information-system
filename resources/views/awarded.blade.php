@extends('layouts.app', [
    'path' => ['Beranda', 'Awarded']
])

@section('title', 'Awarded Page')

@section('content')
    <div class="min-h-screen bg-white space-y-8">
       <section class="grid grid-cols-1 grid-cols-2 h-[600px]">
            <div class="flex flex-col justify-center p-16 space-y-6 h-full">
                <h1 class="text-8xl font-normal leading-tight">
                    Make a Great Escalation
                </h1>
                <p class="text-lg text-[#646A69]">
                    Mereka Bisa, Teman-teman Juga Pasti Bisa! UKM Genia Membuka Jalammu Menuju Prestasi Nasional
                </p>
                <div>
                    <a href="#"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-7 rounded-[200px]">
                            Learn from them
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <img src="{{ asset('images/fawg.svg') }}"
                    alt="Awarded"
                    class="w-[600px] h-[600px] object-cover" />
            </div>
        </section>
        <section class="bg-white py-6 py-12 px-4">
            <!--lanjut sini kelar sholat-->
            <div class="w-full mx-auto bg-[#F7EFD9] w-full min-h rounded-lg px-8 py-8">
                <div class="mb-16">
                    <p class="text-sm text-gray-600 mb-2 pl-10 mb-4">
                        Peringkat kompetisi
                    </p>
                    <div class="pl-10 px-10">
                        <hr class="border-t border-gray-300 pl-10 px-10">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 flex-grow pb-8">
                <div class="py-10 space-y-4 mb-16 pl-10">
                    <h2 class="text-6xl font-normal text-gray-900">
                        Tim Nasional
                    </h2>
                    <div class="">
                        <img src ="{{ asset('images/pimnas.svg') }}"
                            alt="Pimnas logo"
                            class="mt-16"/>
                    </div>
                    <h3 class="text-xl font-medium text-gray-800">
                        TIM PKM-PM
                    </h3>
                    <p class="text-base text-gray-700 leading-relaxed">
                        EV uses electricity as a power source, which can be generated from renewable energy sources. Our solutions help reduce greenhouse gas emissions in the transportation sector.
                    </p>
                    <a href="#" class="inline-block text-blue-600 hover:text-blue-700 hover:underline">
                        Read more
                    </a>
                </div>

                <div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/g1lpim.svg') }}" alt="Landscape 1" class="w-full h-full object-cover">
                            <img src="{{ asset('images/g2ppim.svg') }}" alt="Portrait 1" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/g22ppim.svg') }}" alt="Portrait 2" class="w-full h-full object-cover">
                            <img src="{{ asset('images/g22lpim.svg') }}" alt="Landscape 2" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="bg-white py-6 py-12 px-4">
            <!--lanjut sini kelar sholat-->
            <div class="w-full mx-auto bg-[#F7EFD9] w-full min-h rounded-lg px-8 py-8">
                <div class="mb-16">
                    <p class="text-sm text-gray-600 mb-2 pl-10 mb-4">
                        Peringkat kompetisi
                    </p>
                    <div class="pl-10 px-10">
                        <hr class="border-t border-gray-300 pl-10 px-10">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 flex-grow pb-8">
                <div class="py-10 space-y-4 mb-16 pl-10">
                    <h2 class="text-6xl font-normal text-gray-900">
                        Tim Nasional
                    </h2>
                    <div class="">
                        <img src ="{{ asset('images/gemastik-logo.svg') }}"
                            alt="Pimnas logo"
                            class="mt-16"/>
                    </div>
                    <h3 class="text-xl font-medium text-gray-800">
                        TIM Penambangan Data
                    </h3>
                    <p class="text-base text-gray-700 leading-relaxed">
                    Tim PEKZPEKZ berhasil mengukir sejarah, Perdana membawa Prodi Informatika ketahap Nasional dalam kompetisi Gemastik ke 17 di Universitas Negeri Semarang dengan membawakan karya Ergonomi dalam Fasilitas Publik : Upaya Meningkatkan Mobilitas Lansia dengan Pendekatan Association Rule Mining                    </p>
                    <a href="#" class="inline-block text-blue-600 hover:text-blue-700 hover:underline">
                        Read more
                    </a>
                </div>
                <div>
                    <div class="grid grid-rows-2 gap-4">
                    <!-- Row 1: 2 columns -->
                        <div class="flex flex-row gap-4 h-[287px] aspect-[16/9]">
                            
                            <!-- Column 1: Single portrait image -->
                            <img src="{{ asset('images/g1p.svg') }}" alt="Portrait 1" class="w-[150px] object-cover">
                            <!-- Column 2: Two stacked landscape images -->
                            <div class="flex flex-col gap-4">
                                <img src="{{ asset('images/g2l.svg') }}" alt="Landscape 1"class="w-full h-full object-cover">
                                <img src="{{ asset('images/g3l.svg') }}" alt="Landscape 2" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Row 2: 2 columns side by side, each with 1 landscape -->
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('images/g4l.svg') }}" alt="Landscape 3" class="w-full h-auto object-cover">
                            <img src="{{ asset('images/g5l.svg') }}" alt="Landscape 4" class="w-full h-auto object-cover">
                        </div>
                    </div> 
                </div>
            </div>
            </div>
        </section>
        <section class="bg-white py-6 px-4">
            <!-- Beige Container -->
            <div class="w-full bg-[#F7EFD9] rounded-lg px-8 py-8 mx-auto">
                
                <!-- Row 1: Small Heading + Divider -->
                <div class="mb-8">
                    <p class="text-sm text-gray-600 mb-2">
                        Peringkat kompetisi
                    </p>
                    <hr class="border-t border-gray-300">
                </div>

                <!-- Row 2: Main Title & Description -->
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">
                        Peringkat tingkat Universitas - Gelatik
                    </h2>
                    <p class="text-base text-gray-700 mt-4 leading-relaxed">
                    Seleksi yang diadakan melibatkan prodi Teknik Informatika Fakultas Teknik dan prodi Sistem Informasi Fakultas MIPA. Juri tiap divisi lomba akan melakukan evaluasi dan memutuskan 10 tim pada tiap divisi lomba untuk maju ke tingkat nasional. Silakan mengunduh SK dibawah untuk keterangan lebih detail
                    </p>
                </div>

                <!-- Row 3: Additional Content Spanning Full Container -->
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