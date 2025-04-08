@extends('layouts.app', [
    'path' => ['Beranda', 'News']
])
@section('title', 'News Page')

@section('content')
    <div class="min-h-screen bg-white">
        <!-- Hero Section -->
        <section class="flex flex-col bg-[#0073EF] items-center py-24 md:py-32 lg:py-48">
            <div class="text-4xl md:text-6xl lg:text-8xl text-white text-center">
                <p>Genia News</p>
            </div>
            <div class="text-base md:text-lg text-white text-center mt-4 md:mt-6 lg:mt-8">
                <p>UKM Genia Information Section</p>
            </div>
        </section>

        <!-- Recent Updates Section -->
        @include('components.recent-updates')

        <!-- Competition Announcements Section -->
        <section class="bg-white py-8 sm:py-12 px-4">
            <div class="w-full mx-auto bg-[#F7EFD9] rounded-lg px-4 sm:px-8 py-6 sm:py-8">
                <div class="mb-8 sm:mb-16">
                    <p class="text-sm text-gray-600 mb-2 pl-4 sm:pl-10">
                        Announcement
                    </p>
                    <div class="pl-4 sm:pl-10 pr-4 sm:pr-10">
                        <hr class="border-t border-gray-300">
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-8">
                    <!-- PKM Card -->
                    <div class="bg-white rounded-[20px] shadow-lg p-8 hover:shadow-xl transition-shadow cursor-pointer">
                        <div class="flex flex-col items-center text-center">
                            <img src="{{ asset('images/logo_pkm.png') }}" alt="PKM Logo" class="h-16 w-auto mb-6">
                            <h3 class="text-xl font-medium">Pekan Kreativitas Mahasiswa</h3>
                        </div>
                    </div>

                    <!-- GELATIK Card -->
                    <div class="bg-white rounded-[20px] shadow-lg p-8 hover:shadow-xl transition-shadow cursor-pointer">
                        <div class="flex flex-col items-center text-center">
                            <h3 class="text-4xl font-bold mb-6">GELATIK</h3>
                            <p class="text-lg">Pagelaran Sains Data, Inovasi Digital, dan TIK</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-8">
                    <!-- ON MIPA PT Card -->
                    <div class="bg-white rounded-[20px] shadow-lg p-8 hover:shadow-xl transition-shadow cursor-pointer">
                        <div class="flex flex-col items-center text-center">
                            <img src="{{ asset('images/onmipa2.svg') }}" alt="ON MIPA PT Logo" class="h-16 w-auto mb-6">
                            <h3 class="text-xl font-medium">Olimpiade Nasional Matematika dan Ilmu<br>Pengetahuan Alam Perguruan Tinggi</h3>
                        </div>
                    </div>

                    <!-- COMPFEST Card -->
                    <div class="bg-white rounded-[20px] shadow-lg p-8 hover:shadow-xl transition-shadow cursor-pointer">
                        <div class="flex flex-col items-center text-center">
                            <img src="{{ asset('images/compfestnigger.svg') }}" alt="COMPFEST Logo" class="h-16 w-auto mb-6">
                            <h3 class="text-xl font-medium">COMPFEST UI</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection