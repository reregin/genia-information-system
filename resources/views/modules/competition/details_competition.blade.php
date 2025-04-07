@extends('layouts.app', [
    'path' => ['Competitions', 'Details']
])
<?php
$competition = (object)[
  'id' => 1,
  'name' => 'Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Perguruan Tinggi 2024',
  'logo' => "logo-onmipa.png", // Assuming you have this image
  'categories' => ['Riset dan Inovasi', 'Akademik'],
  'start_date' => \Carbon\Carbon::parse('2024-02-19'),
  'end_date' => \Carbon\Carbon::parse('2024-05-17'),
  'location' => 'Provinsi - Nasional',
  'level' => 'Nasional',
  'organizer' => 'Kementerian Pendidikan dan Kebudayaan',
  'registration_open' => false,
  'guidebook_url' => '#',
  'overview' => '<p>Olimpiade Nasional Matematika dan IPA (ONMIPA) Perguruan Tinggi adalah kompetisi akademik tingkat nasional yang diselenggarakan untuk mahasiswa S1/Diploma se-Indonesia. Kompetisi ini bertujuan untuk meningkatkan kemampuan akademik, kreativitas, dan inovasi mahasiswa dalam bidang matematika dan ilmu pengetahuan alam.</p>
                    <p>Kompetisi ini memiliki 4 bidang lomba, yaitu:</p>
                    <ul class="list-disc pl-5">
                      <li>Matematika</li>
                      <li>Fisika</li>
                      <li>Kimia</li>
                      <li>Biologi</li>
                    </ul>
                    <p>Setiap perguruan tinggi dapat mengirimkan maksimal 2 peserta untuk setiap bidang lomba. Peserta yang lolos seleksi tingkat perguruan tinggi akan mengikuti seleksi tingkat wilayah, dan pemenang tingkat wilayah akan maju ke tingkat nasional.</p>',
  'timelines' => [
    (object)[
      'title' => 'Pendaftaran & Seleksi Internal PT',
      'start_date' => \Carbon\Carbon::parse('2024-02-19'),
      'end_date' => \Carbon\Carbon::parse('2024-03-15'),
      'description' => 'Peserta mendaftar melalui perguruan tinggi masing-masing dan mengikuti seleksi internal.'
    ],
    (object)[
      'title' => 'Seleksi Tingkat Wilayah',
      'start_date' => \Carbon\Carbon::parse('2024-03-25'),
      'end_date' => \Carbon\Carbon::parse('2024-04-10'),
      'description' => 'Perwakilan perguruan tinggi mengikuti seleksi tingkat wilayah yang diselenggarakan oleh LLDIKTI.'
    ],
    (object)[
      'title' => 'Pengumuman Hasil Seleksi Wilayah',
      'start_date' => \Carbon\Carbon::parse('2024-04-20'),
      'end_date' => null,
      'description' => 'Pengumuman peserta yang lolos ke tingkat nasional.'
    ],
    (object)[
      'title' => 'Final Tingkat Nasional',
      'start_date' => \Carbon\Carbon::parse('2024-05-10'),
      'end_date' => \Carbon\Carbon::parse('2024-05-17'),
      'description' => 'Kompetisi tingkat nasional dan upacara penganugerahan pemenang.'
    ]
  ],
  'first_prize' => 25000000,
  'first_prize_description' => 'Medali Emas, Sertifikat, dan Piala Bergilir',
  'second_prize' => 15000000,
  'second_prize_description' => 'Medali Perak dan Sertifikat',
  'third_prize' => 10000000,
  'third_prize_description' => 'Medali Perunggu dan Sertifikat',
  'additional_prizes' => '<p>Selain hadiah utama, pemenang juga berkesempatan untuk:</p>
                             <ul class="list-disc pl-5">
                               <li>Beasiswa pendidikan lanjut</li>
                               <li>Kesempatan magang di perusahaan partner</li>
                               <li>Mengikuti forum ilmiah internasional</li>
                             </ul>',
  'rules' => '<h3>Persyaratan Peserta</h3>
                  <ul class="list-disc pl-5">
                    <li>Mahasiswa aktif jenjang S1/Diploma perguruan tinggi di Indonesia</li>
                    <li>Maksimal berusia 23 tahun per 31 Desember 2024</li>
                    <li>Belum pernah menjadi juara 1 ONMIPA tingkat nasional</li>
                    <li>Mendapatkan rekomendasi dari perguruan tinggi</li>
                  </ul>
                  <h3>Ketentuan Lomba</h3>
                  <ul class="list-disc pl-5">
                    <li>Peserta wajib mengikuti seluruh rangkaian kegiatan</li>
                    <li>Peserta akan diuji melalui tes tertulis dan praktikum</li>
                    <li>Peserta wajib mematuhi tata tertib yang ditetapkan panitia</li>
                    <li>Keputusan juri bersifat final dan tidak dapat diganggu gugat</li>
                  </ul>',
  'faqs' => [
    (object)[
      'question' => 'Bagaimana cara mendaftar ONMIPA 2024?',
      'answer' => 'Pendaftaran dilakukan melalui perguruan tinggi masing-masing. Setiap PT akan melakukan seleksi internal untuk menentukan perwakilan yang akan dikirim ke tingkat wilayah.'
    ],
    (object)[
      'question' => 'Berapa biaya pendaftaran ONMIPA 2024?',
      'answer' => 'ONMIPA tidak memungut biaya pendaftaran. Seluruh biaya pelaksanaan ditanggung oleh Kementerian Pendidikan dan Kebudayaan.'
    ],
    (object)[
      'question' => 'Apakah boleh mendaftar lebih dari satu bidang lomba?',
      'answer' => 'Tidak, setiap peserta hanya diperbolehkan mengikuti satu bidang lomba.'
    ],
    (object)[
      'question' => 'Apa format tes yang akan diberikan?',
      'answer' => 'Format tes terdiri dari babak penyisihan (tes tertulis) dan babak final (tes tertulis dan praktikum/pemecahan masalah).'
    ]
  ],
  'contacts' => [
    (object)[
      'name' => 'Dr. Budi Santoso',
      'role' => 'Ketua Pelaksana',
      'phone' => '+6281234567890',
      'email' => 'budi.santoso@kemdikbud.go.id',
      'whatsapp' => '+6281234567890'
    ],
    (object)[
      'name' => 'Siti Aminah, M.Sc',
      'role' => 'Sekretariat',
      'phone' => '+6289876543210',
      'email' => 'siti.aminah@kemdikbud.go.id',
      'whatsapp' => '+6289876543210'
    ]
  ]
    ];
  $relatedCompetitions = [];
?>
@section('content')
<div class="container mx-auto py-8 px-4">
    <!-- Competition Header -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="flex flex-col md:flex-row items-start md:items-center">
            <div class="w-full md:w-1/4 flex justify-center mb-6 md:mb-0">
                <img src="{{ asset('images/' . $competition->logo) }}" alt="{{ $competition->name }}" class="h-48 object-contain">
            </div>
            <div class="w-full md:w-3/4 md:pl-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $competition->name }}</h1>
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach($competition->categories as $category)
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">{{ $category }}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                    <div>
                        <p class="text-gray-600"><span class="font-semibold">Date:</span> {{ $competition->start_date->format('d M Y') }} - {{ $competition->end_date->format('d M Y') }}</p>
                        <p class="text-gray-600"><span class="font-semibold">Location:</span> {{ $competition->location }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600"><span class="font-semibold">Level:</span> {{ $competition->level }}</p>
                        <p class="text-gray-600"><span class="font-semibold">Organizer:</span> {{ $competition->organizer }}</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-3">
                    @if($competition->registration_open)
                        <a href="{{ route('competitions.register', $competition->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-6 rounded-md transition">Register Now</a>
                    @endif
                    <a href="{{ $competition->guidebook_url }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded-md transition">Download Guidebook</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="w-screen h-screen">
    <iframe 
        src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTPQHWbbASeUV39B1V8KZnlDaErnW-SBKZ5mvGujA9gwHdzPLenyRtixwWXneeqZLnXx69_J6MhJCaF/pubhtml?gid=1403662745&amp;single=true&amp;widget=true&amp;headers=false"
        class="w-full h-full border-0"
    ></iframe>
    </div>

    <!-- Navigation Tabs -->
    <div class="mb-8 border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px">
            <li class="mr-2">
                <a href="#overview" class="inline-block p-4 border-b-2 border-blue-500 font-medium text-blue-600">Overview</a>
            </li>
            <li class="mr-2">
                <a href="#timeline" class="inline-block p-4 border-transparent border-b-2 hover:border-gray-300 font-medium text-gray-600 hover:text-gray-800">Timeline</a>
            </li>
            <li class="mr-2">
                <a href="#prizes" class="inline-block p-4 border-transparent border-b-2 hover:border-gray-300 font-medium text-gray-600 hover:text-gray-800">Prizes</a>
            </li>
            <li class="mr-2">
                <a href="#rules" class="inline-block p-4 border-transparent border-b-2 hover:border-gray-300 font-medium text-gray-600 hover:text-gray-800">Rules</a>
            </li>
            <li class="mr-2">
                <a href="#faqs" class="inline-block p-4 border-transparent border-b-2 hover:border-gray-300 font-medium text-gray-600 hover:text-gray-800">FAQs</a>
            </li>
            <li>
                <a href="#contact" class="inline-block p-4 border-transparent border-b-2 hover:border-gray-300 font-medium text-gray-600 hover:text-gray-800">Contact</a>
         </li>
        </ul>
    </div>

    <!-- Overview Section -->
    <div id="overview" class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Overview</h2>
        <div class="prose max-w-none">
            {!! $competition->overview !!}
        </div>
    </div>

    <!-- Timeline Section -->
    <div id="timeline" class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Timeline</h2>
        <div class="relative">
            @foreach($competition->timelines as $index => $timeline)
                <div class="flex mb-8 items-start">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">{{ $index + 1 }}</div>
                        @if(!$loop->last)
                            <div class="h-full border-l-2 border-blue-300 my-2"></div>
                        @endif
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 flex-grow">
                        <h3 class="font-bold text-lg text-gray-800">{{ $timeline->title }}</h3>
                        <p class="text-blue-600 font-medium mb-2">{{ $timeline->start_date->format('d M Y') }} @if($timeline->end_date) - {{ $timeline->end_date->format('d M Y') }} @endif</p>
                        <p class="text-gray-700">{{ $timeline->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Prizes Section -->
    <div id="prizes" class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Prizes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 text-center">
                <div class="inline-block p-4 bg-yellow-500 text-white rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">1st Place</h3>
                <p class="text-2xl font-bold text-yellow-600 mb-2">Rp {{ number_format($competition->first_prize, 0, ',', '.') }}</p>
                <p class="text-gray-700">{{ $competition->first_prize_description }}</p>
            </div>
            <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                <div class="inline-block p-4 bg-gray-400 text-white rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">2nd Place</h3>
                <p class="text-2xl font-bold text-gray-600 mb-2">Rp {{ number_format($competition->second_prize, 0, ',', '.') }}</p>
                <p class="text-gray-700">{{ $competition->second_prize_description }}</p>
            </div>
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-6 text-center">
                <div class="inline-block p-4 bg-orange-500 text-white rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">3rd Place</h3>
                <p class="text-2xl font-bold text-orange-600 mb-2">Rp {{ number_format($competition->third_prize, 0, ',', '.') }}</p>
                <p class="text-gray-700">{{ $competition->third_prize_description }}</p>
            </div>
        </div>
        @if($competition->additional_prizes)
            <div class="mt-6">
                <h3 class="text-xl font-bold mb-3">Additional Prizes</h3>
                <div class="prose max-w-none">
                    {!! $competition->additional_prizes !!}
                </div>
            </div>
        @endif
    </div>

    <!-- Rules Section -->
    <div id="rules" class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Rules & Requirements</h2>
        <div class="prose max-w-none">
            {!! $competition->rules !!}
        </div>
    </div>

    <!-- FAQs Section -->
    <div id="faqs" class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
        <div class="space-y-4">
            @foreach($competition->faqs as $faq)
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full p-4 text-left font-medium text-gray-900 focus:outline-none">
                        <span>{{ $faq->question }}</span>
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="p-4 pt-4 border-t border-gray-200">
                        <p class="text-gray-700">{{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($competition->contacts as $contact)
                <div class="flex items-start">
                    <div class="shrink-0">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="font-semibold text-lg">{{ $contact->name }}</h3>
                        <p class="text-gray-600">{{ $contact->role }}</p>
                        <div class="mt-2 space-y-1">
                            <p class="flex items-center text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                {{ $contact->phone }}
                            </p>
                            <p class="flex items-center text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                {{ $contact->email }}
                            </p>
                            @if($contact->whatsapp)
                                <p class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                    {{ $contact->whatsapp }} (WhatsApp)
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    
</div>
@endsection