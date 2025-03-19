@extends('layouts.app', [
    'path' => ['Beranda', 'About Us']
])

@section('content')
<div class="grid grid-cols-12 gap-x-8 w-full">
    <div class="col-span-6 flex flex-col justify-center p-16 space-y-6 h-full">
        <h1 class="text-8xl font-normal leading-tight">
            Get to Know About Genia
        </h1>
        <p class="text-lg text-[#646A69]">
            Bersama UKM Genia, mari kita membangkitkan semangat kompetisi dengan membangun budaya yang penuh tekad, kerja sama, dan keunggulan. Bersama-sama, UKM Genia mendorong setiap individu untuk melampaui batas dan meraih potensi terbaiknya.
        </p>
    </div>

    <div class="col-span-6 flex items-center justify-end">
        <img src="{{ asset('images/about-us.svg') }}"
            alt="Tentang Genia"
            class="w-[600px] h-[600px] object-cover" />
    </div>
</div>

<div>
    <div class="grid grid-cols-12 gap-x-8 mt-8">
        <div class="col-span-5 flex flex-col p-16 h-full">
            <h2 class="text-6xl font-normal leading-tight">
                About Us
            </h2>
            <p class="text-xl">
             UKM Penalaran - Genia FT UNSRAT
            </p>
        </div>

        <div class="col-span-7 flex items-center py-16 px-8 mr-16">
            <div class="text-xl text-[#646A69]">
                Dengan segala keterbatasan namun penuh semangat, kami bersatu membentuk UKM Genia sebagai wadah yang memudahkan mahasiswa mendapatkan informasi, mempersiapkan diri untuk berbagai kompetisi, dan berpartisipasi dalam diskusi yang memperkaya wawasan. Bersama UKM Genia, mari kita melangkah menuju masa depan yang lebih baik dengan optimisme dan kerendahan hati.
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center py-16">
        <div class="flex gap-6 overflow-x-auto">
            @foreach ([
                'about-us1.png',
                'about-us2.png',
                'about-us3.png',
                'about-us4.png',
                'about-us5.png'
            ] as $image)
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/' . $image) }}" alt="Tentang Genia" class="w-64 h-96 object-cover">
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="bg-[#001D3D] text-white  flex flex-col text-center justify-center items-center gap-y-8 px-8 py-24 mt-8">
    <h1 class="text-6xl">
        Our Vision
    </h1>
    <p class="text-lg max-w-2xl">
        Menjadi wadah unggulan yang membentuk generasi inovatif dan berdaya pikir kritis dalam menciptakan solusi berbasis keilmuan untuk kemajuan masyarakat.
    </p>
</div>

<div class="grid grid-cols-2 gap-8 items-center px-12 py-16">
    <div class="flex justify-center">
        <img src="{{ asset('images/our-mission.png') }}" alt="Tentang Genia" class="rounded-xl max-w-[80%] object-cover">
    </div>

    <div>
        <h1 class="text-6xl mb-8">Our Mission</h1>
        <p class="text-lg text-gray-700">
            Dalam rangka mewujudkan visi tersebut, UKM Penalaran "Genia" menjalankan misi berikut:
        </p>
        <ul class="mt-6 space-y-2 text-lg text-gray-700">
            <li>🗸 Meningkatkan kreativitas melalui penelitian dan diskusi.</li>
            <li>🗸 Melatih logika dan berpikir kritis lewat kompetisi.</li>
            <li>🗸 Membangun kolaborasi lintas disiplin ilmu.</li>
        </ul>
    </div>
</div>

<div class="w-full flex justify-center p-4 sm:p-8 md:p-12 lg:p-16">
    <div class="w-full bg-[#FFF7ED] rounded-lg p-16">
        <div class="mb-8">
            <p class="text-sm text-gray-600 mb-2">
                Programs
            </p>
            <hr class="border-t border-gray-300">
        </div>

        <div class="mb-8">
            <h2 class="text-6xl text-gray-900">
                What We Offer
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-8">
            
            <div>
                <img src="{{ asset('images/offer-1.svg') }}" alt="Icon" class="mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Team Building and Selection</h3>
                <p class="text-gray-600">
                    Mengadakan proses seleksi yang terorganisir untuk membentuk tim yang solid, saling melengkapi, dan siap menghadapi berbagai tantangan bersama dengan kolaborasi yang efektif.
                </p>
            </div>

            <div>
                <img src="{{ asset('images/offer-2.svg') }}" alt="Icon" class="mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Socialization Programs</h3>
                <p class="text-gray-600">
                    Menciptakan lingkungan yang mendukung dengan mengadakan berbagai kegiatan sosialisasi yang memperkuat ikatan antaranggota, serta mendorong komunikasi dan kerja sama yang harmonis.
                </p>
            </div>

            <div>
                <img src="{{ asset('images/offer-3.svg') }}" alt="Icon" class="mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Competition Preparation</h3>
                <p class="text-gray-600">
                    Memberikan pembekalan melalui pelatihan intensif, simulasi, dan mentoring yang dirancang untuk mempersiapkan tim agar mampu tampil optimal dan percaya diri dalam kompetisi.
                </p>
            </div>

            <div>
                <img src="{{ asset('images/offer-4.svg') }}" alt="Icon" class="mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Networking Opportunities</h3>
                <p class="text-gray-600">
                    Menyediakan kesempatan untuk menjalin hubungan dengan komunitas lain serta para ahli di berbagai bidang demi memperluas wawasan dan membangun koneksi yang bermanfaat.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-[#001D3D] mx-auto grid grid-cols-1 lg:grid-cols-2 items-center mt-8">
    <div class="text-white text-left px-4 sm:px-8 md:px-12 lg:px-16">
        <h1 class="text-6xl sm:text-5xl">Your Journey Starts Here.</h1>
        <p class="mt-4 text-lg">
            Bergabunglah bersama UKM Genia dan jadilah bagian dari komunitas penuh semangat, tempat kompetisi menjadi wadah untuk tumbuh, berkolaborasi, dan meraih pencapaian bersama!
        </p>
        <button class="mt-6 bg-blue-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-600 transition">
            Get in touch
        </button>
    </div>

    <div class="flex justify-end">
        <img src="{{ asset('images/starts-here.svg') }}" alt="Starts with Genia" class="w-full max-w-md lg:max-w-lg">
    </div>
</div>
@endsection