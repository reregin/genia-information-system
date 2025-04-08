<!-- Recent Updates Section -->
<section class="py-16 px-4 md:px-8 max-w-7xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-medium text-center mb-16">
        Recent Updates From UKM Genia
    </h2>

    <!-- Year Selection -->
    <div class="flex justify-center gap-12 mb-16">
        <button onclick="changeYear(2024)" class="year-btn text-xl text-gray-600 hover:text-blue-700 transition-colors" data-year="2024">
            2024
        </button>
        <button onclick="changeYear(2025)" class="year-btn text-xl text-gray-600 hover:text-blue-700 transition-colors active" data-year="2025">
            2025
        </button>
        <button onclick="changeYear(2026)" class="year-btn text-xl text-gray-600 hover:text-blue-700 transition-colors" data-year="2026">
            2026
        </button>
    </div>

    <!-- Content Grid -->
    <div class="w-full">
        <!-- Content for 2024 (Initially Hidden) -->
        <div class="year-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-year="2024">
            <!-- Event Box 1 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Pengumuman Seleksi Internal GELATIK UNSRAT 2024</h3>
                        <p class="text-gray-600">Jumat, 15 Maret 2024</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 2 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Ristek UI Preliminary Rounds</h3>
                        <p class="text-gray-600">Senin, 21 April 2024</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 3 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Genia Datathon Open-Register</h3>
                        <p class="text-gray-600">Kamis, 1 Mei 2024</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 4 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">UNITY x Genia Hackathon</h3>
                        <p class="text-gray-600">Selasa, 2 Mei 2024</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 5 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">GELATIK Finalist Announcement</h3>
                        <p class="text-gray-600">Senin, 5 Mei 2024</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 6 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Genia Quarantine for Gelatik Finalist</h3>
                        <p class="text-gray-600">Rabu, 15 Mei 2024</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <!-- Content for 2025 (Initially Shown) -->
        <div class="year-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-year="2025">
            <!-- Event Box 1 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Pengumuman Seleksi Internal GELATIK UNSRAT 2025</h3>
                        <p class="text-gray-600">Jumat, 15 Maret 2025</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 2 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Ristek UI Preliminary Rounds</h3>
                        <p class="text-gray-600">Senin, 21 April 2025</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 3 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Genia Datathon Open-Register</h3>
                        <p class="text-gray-600">Kamis, 1 Mei 2025</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 4 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">UNITY x Genia Hackathon</h3>
                        <p class="text-gray-600">Selasa, 2 Mei 2025</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 5 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">GELATIK Finalist Announcement</h3>
                        <p class="text-gray-600">Senin, 5 Mei 2025</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 6 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Genia Quarantine for Gelatik Finalist</h3>
                        <p class="text-gray-600">Rabu, 15 Mei 2025</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <!-- Content for 2026 (Initially Hidden) -->
        <div class="year-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-year="2026">
            <!-- Event Box 1 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Pengumuman Seleksi Internal GELATIK UNSRAT 2026</h3>
                        <p class="text-gray-600">Jumat, 15 Maret 2026</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 2 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Ristek UI Preliminary Rounds</h3>
                        <p class="text-gray-600">Senin, 21 April 2026</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 3 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Genia Datathon Open-Register</h3>
                        <p class="text-gray-600">Kamis, 1 Mei 2026</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 4 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">UNITY x Genia Hackathon</h3>
                        <p class="text-gray-600">Selasa, 2 Mei 2026</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 5 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">GELATIK Finalist Announcement</h3>
                        <p class="text-gray-600">Senin, 5 Mei 2026</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Event Box 6 -->
            <a href="{{ route('details_news') }}" class="bg-white rounded-[20px] shadow-lg p-6 hover:shadow-xl transition-shadow cursor-pointer">
                <div class="flex flex-col h-full">
                    <div class="flex-grow">
                        <h3 class="text-xl font-medium mb-2">Genia Quarantine for Gelatik Finalist</h3>
                        <p class="text-gray-600">Rabu, 15 Mei 2026</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<style>
    .year-btn.active {
        color: #0073EF;
        position: relative;
    }

    .year-btn.active::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #0073EF;
    }
</style>

<script>
    function changeYear(year) {
        // Update button styles
        document.querySelectorAll('.year-btn').forEach(btn => {
            btn.classList.remove('active');
            if (btn.dataset.year == year) {
                btn.classList.add('active');
            }
        });

        // Show/hide content
        document.querySelectorAll('.year-content').forEach(content => {
            content.classList.add('hidden');
            if (content.dataset.year == year) {
                content.classList.remove('hidden');
            }
        });
    }
</script> 