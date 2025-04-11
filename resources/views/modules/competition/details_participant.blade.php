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
</div>
@endsection