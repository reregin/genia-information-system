<?php

// Competition 1 (Based on your example - ONMIPA)
$competition1 = (object)[
  'id' => 1,
  'name' => 'Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Perguruan Tinggi 2024',
  'logo' => "logo_onmipa.png", // Assuming you have this image in public/images or similar
  'categories' => ['Akademik', 'Riset dan Inovasi'], // Adjusted categories slightly
  'start_date' => \Carbon\Carbon::parse('2024-02-19'),
  'end_date' => \Carbon\Carbon::parse('2024-05-17'),
  'registration_start_date' => \Carbon\Carbon::parse('2024-02-19'), // Added for status calculation
  'registration_end_date' => \Carbon\Carbon::parse('2024-03-15'), // Added for status calculation
  'location' => 'Nasional (Final di Universitas Indonesia)', // More specific location
  'level' => 'Nasional',
  'organizer' => 'Pusat Prestasi Nasional (Puspresnas)', // Updated organizer
  'guidebook_url' => '#onmipa-guidebook', // Example URL
  'overview' => '<p>Olimpiade Nasional Matematika dan IPA (ONMIPA) Perguruan Tinggi adalah kompetisi akademik tingkat nasional yang diselenggarakan oleh Pusat Prestasi Nasional (Puspresnas) Kemendikbudristek untuk mahasiswa S1/Diploma se-Indonesia. Kompetisi ini bertujuan untuk meningkatkan kemampuan akademik, wawasan, kreativitas, dan inovasi mahasiswa dalam bidang matematika dan ilmu pengetahuan alam.</p>
                    <p>Kompetisi ini melombakan 4 bidang:</p>
                    <ul class="list-disc pl-5 space-y-1">
                      <li>Matematika</li>
                      <li>Fisika</li>
                      <li>Kimia</li>
                      <li>Biologi</li>
                    </ul>
                    <p>Seleksi dilakukan secara bertingkat mulai dari tingkat perguruan tinggi, tingkat wilayah (LLDIKTI), hingga tingkat nasional.</p>',
  'timelines' => [
    (object)[
      'title' => 'Pendaftaran & Seleksi Internal PT',
      'start_date' => \Carbon\Carbon::parse('2024-02-19'),
      'end_date' => \Carbon\Carbon::parse('2024-03-15'),
      'description' => 'Mahasiswa mendaftar melalui sistem internal perguruan tinggi masing-masing.'
    ],
    (object)[
      'title' => 'Unggah Data Peserta oleh PT ke Sistem Pusat',
      'start_date' => \Carbon\Carbon::parse('2024-03-16'),
      'end_date' => \Carbon\Carbon::parse('2024-03-22'),
      'description' => 'Perguruan Tinggi mengunggah data peserta hasil seleksi internal.'
    ],
    (object)[
      'title' => 'Seleksi Tingkat Wilayah (Online)',
      'start_date' => \Carbon\Carbon::parse('2024-04-02'),
      'end_date' => \Carbon\Carbon::parse('2024-04-05'),
      'description' => 'Pelaksanaan tes seleksi tingkat wilayah secara daring.'
    ],
     (object)[
      'title' => 'Pengumuman Hasil Seleksi Wilayah',
      'start_date' => \Carbon\Carbon::parse('2024-04-20'),
      'end_date' => null, // Single date event
      'description' => 'Pengumuman peserta yang lolos ke tingkat nasional via website Puspresnas.'
    ],
    (object)[
      'title' => 'Pelaksanaan Tingkat Nasional',
      'start_date' => \Carbon\Carbon::parse('2024-05-12'),
      'end_date' => \Carbon\Carbon::parse('2024-05-17'),
      'description' => 'Kompetisi babak final tingkat nasional dilaksanakan di Universitas Indonesia.'
    ]
  ],
  'first_prize' => 25000000,
  'first_prize_description' => 'Medali Emas, Sertifikat, Uang Pembinaan',
  'second_prize' => 15000000,
  'second_prize_description' => 'Medali Perak, Sertifikat, Uang Pembinaan',
  'third_prize' => 10000000,
  'third_prize_description' => 'Medali Perunggu, Sertifikat, Uang Pembinaan',
  'additional_prizes' => '<p>Selain hadiah utama, terdapat juga penghargaan Honorable Mention untuk peserta dengan nilai tinggi.</p>',
  'rules' => '<h3>Persyaratan Peserta</h3>
                  <ul class="list-disc pl-5 space-y-1">
                    <li>Mahasiswa aktif Program Sarjana (S1) atau Diploma (D3/D4) perguruan tinggi di lingkungan Kemendikbudristek.</li>
                    <li>Terdaftar pada Pangkalan Data Pendidikan Tinggi (PDDikti) dan aktif pada semester berjalan.</li>
                    <li>Maksimal semester 8 (untuk S1/D4) atau semester 6 (untuk D3).</li>
                    <li>Belum pernah meraih medali emas atau Juara I dalam ONMIPA tingkat Nasional pada bidang yang sama.</li>
                    <li>Direkomendasikan oleh pimpinan perguruan tinggi.</li>
                  </ul>
                  <h3>Ketentuan Umum</h3>
                  <ul class="list-disc pl-5 space-y-1">
                    <li>Setiap PT dapat mengirimkan maksimal 2 mahasiswa per bidang lomba untuk seleksi wilayah.</li>
                    <li>Peserta wajib mengikuti seluruh rangkaian acara sesuai jadwal.</li>
                    <li>Peserta wajib menjunjung tinggi sportivitas dan integritas akademik.</li>
                  </ul>',
  'faqs' => [
    (object)[
      'question' => 'Bagaimana cara mendaftar ONMIPA 2024?',
      'answer' => 'Pendaftaran awal dilakukan melalui mekanisme internal di perguruan tinggi masing-masing. Hubungi bagian kemahasiswaan PT Anda untuk informasi lebih lanjut.'
    ],
    (object)[
      'question' => 'Apakah seleksi wilayah dan nasional dilaksanakan secara luring (offline)?',
      'answer' => 'Seleksi tingkat wilayah dilaksanakan secara daring (online). Pelaksanaan tingkat nasional tahun 2024 direncanakan secara luring di Universitas Indonesia.'
    ],
     (object)[
      'question' => 'Apakah ada biaya pendaftaran?',
      'answer' => 'Tidak ada biaya pendaftaran yang dibebankan kepada peserta maupun perguruan tinggi. Kegiatan ini didanai penuh oleh Kemendikbudristek.'
    ],
  ],
  'contacts' => [
    (object)[
      'name' => 'Helpdesk Puspresnas',
      'role' => 'Panitia Pusat',
      'phone' => '(021) 5731177',
      'email' => 'puspresnas@kemdikbud.go.id',
      'whatsapp' => null // Often not provided officially
    ],
     (object)[
      'name' => 'Website Resmi',
      'role' => 'Informasi Lengkap',
      'phone' => null,
      'email' => null,
      'whatsapp' => null,
      'website' => 'https://pusatprestasinasional.kemdikbud.go.id/' // Example website
    ],
  ]
];


// Competition 2 (Example: Technology Competition - GEMASTIK)
$competition2 = (object)[
  'id' => 2,
  'name' => 'Pagelaran Mahasiswa Nasional bidang TIK (GEMASTIK) XVII 2024',
  'logo' => "logo_gemastik2.png", // Assuming you have this image
  'categories' => ['Akademik', 'Riset dan Inovasi', 'Pengembangan Perangkat Lunak'], // More specific categories
  'start_date' => \Carbon\Carbon::parse('2024-07-01'), // Later date
  'end_date' => \Carbon\Carbon::parse('2024-11-15'), // Later date
  'registration_start_date' => \Carbon\Carbon::parse('2024-07-01'),
  'registration_end_date' => \Carbon\Carbon::parse('2024-08-15'),
  'location' => 'Nasional (Final di Universitas Telkom)', // Example host
  'level' => 'Nasional',
  'organizer' => 'Pusat Prestasi Nasional (Puspresnas) & Universitas Telkom',
  'guidebook_url' => '#gemastik-guidebook',
  'overview' => '<p>GEMASTIK (Pagelaran Mahasiswa Nasional bidang Teknologi Informasi dan Komunikasi) merupakan program Pusat Prestasi Nasional yang bertujuan untuk meningkatkan kompetensi mahasiswa Indonesia dalam bidang TIK.</p>
                   <p>Kompetisi ini menjadi ajang unjuk gigi dalam penguasaan TIK dan pengembangan inovasi di kalangan mahasiswa. Terdapat berbagai divisi lomba yang mencakup:</p>
                   <ul class="list-disc pl-5 space-y-1">
                     <li>Pemrograman (Programming)</li>
                     <li>Keamanan Siber (Cyber Security)</li>
                     <li>Pengembangan Perangkat Lunak (Software Development)</li>
                     <li>Desain Pengalaman Pengguna (UX Design)</li>
                     <li>Animasi</li>
                     <li>Kota Cerdas (Smart City)</li>
                     <li>Karya Tulis Ilmiah TIK</li>
                     <li>Pengembangan Bisnis TIK</li>
                     <li>Dan lain-lain (cek guidebook terbaru)</li>
                   </ul>',
  'timelines' => [
    (object)[
      'title' => 'Sosialisasi dan Pendaftaran Tim',
      'start_date' => \Carbon\Carbon::parse('2024-07-01'),
      'end_date' => \Carbon\Carbon::parse('2024-08-15'),
      'description' => 'Perguruan tinggi mendaftarkan tim-tim terbaiknya melalui sistem pendaftaran GEMASTIK.'
    ],
    (object)[
      'title' => 'Babak Penyisihan (Online)',
      'start_date' => \Carbon\Carbon::parse('2024-09-01'),
      'end_date' => \Carbon\Carbon::parse('2024-09-30'),
      'description' => 'Pelaksanaan babak penyisihan sesuai dengan mekanisme masing-masing divisi lomba (misal: CTF, pengumpulan proposal, coding contest).'
    ],
    (object)[
      'title' => 'Pengumuman Finalis',
      'start_date' => \Carbon\Carbon::parse('2024-10-15'),
      'end_date' => null,
      'description' => 'Pengumuman tim yang lolos ke babak final tingkat nasional.'
    ],
    (object)[
      'title' => 'Babak Final & Pameran',
      'start_date' => \Carbon\Carbon::parse('2024-11-10'),
      'end_date' => \Carbon\Carbon::parse('2024-11-15'),
      'description' => 'Pelaksanaan babak final, pameran karya, dan malam penganugerahan di Universitas Telkom.'
    ]
  ],
  'first_prize' => 20000000, // Slightly different prize values
  'first_prize_description' => 'Medali Emas, Sertifikat, Uang Pembinaan per Divisi',
  'second_prize' => 12000000,
  'second_prize_description' => 'Medali Perak, Sertifikat, Uang Pembinaan per Divisi',
  'third_prize' => 8000000,
  'third_prize_description' => 'Medali Perunggu, Sertifikat, Uang Pembinaan per Divisi',
  'additional_prizes' => '<p>Selain medali, finalis dan pemenang berkesempatan mendapatkan pengakuan industri, potensi rekrutmen, dan jejaring profesional.</p>
                             <ul class="list-disc pl-5 space-y-1">
                               <li>Penghargaan Khusus Kategori Tertentu</li>
                               <li>Kesempatan presentasi di depan praktisi industri</li>
                             </ul>',
  'rules' => '<h3>Persyaratan Tim</h3>
                  <ul class="list-disc pl-5 space-y-1">
                    <li>Tim terdiri dari maksimal 3 mahasiswa aktif (S1/D3/D4) dari perguruan tinggi yang sama.</li>
                    <li>Setiap mahasiswa hanya boleh terdaftar pada satu tim dan satu divisi lomba.</li>
                    <li>Peserta terdaftar di PDDikti.</li>
                    <li>Didampingi oleh seorang dosen pembimbing.</li>
                  </ul>
                  <h3>Ketentuan Karya/Lomba</h3>
                  <ul class="list-disc pl-5 space-y-1">
                    <li>Karya yang dilombakan harus orisinal dan belum pernah diikutsertakan dalam kompetisi lain.</li>
                    <li>Peserta wajib mematuhi aturan spesifik per divisi lomba yang tercantum dalam guidebook.</li>
                    <li>Pelanggaran terhadap aturan dan integritas akademik akan mengakibatkan diskualifikasi.</li>
                  </ul>',
  'faqs' => [
    (object)[
      'question' => 'Bagaimana cara mendaftar GEMASTIK XVII?',
      'answer' => 'Pendaftaran dilakukan secara tim oleh perguruan tinggi melalui portal resmi GEMASTIK yang akan diinformasikan oleh Puspresnas.'
    ],
    (object)[
      'question' => 'Berapa jumlah tim maksimal yang bisa dikirim oleh satu Perguruan Tinggi?',
      'answer' => 'Setiap perguruan tinggi dapat mengirimkan lebih dari satu tim, namun biasanya ada batasan jumlah tim per divisi lomba. Cek guidebook resmi untuk detailnya.'
    ],
    (object)[
      'question' => 'Apakah babak final dilaksanakan online atau offline?',
      'answer' => 'Biasanya babak final GEMASTIK dilaksanakan secara luring (offline) di perguruan tinggi tuan rumah yang ditunjuk.'
    ],
    (object)[
      'question' => 'Dimana saya bisa mendapatkan guidebook resmi?',
      'answer' => 'Guidebook resmi akan dipublikasikan di website Pusat Prestasi Nasional (Puspresnas) dan website resmi GEMASTIK.'
    ]
  ],
  'contacts' => [
    (object)[
      'name' => 'Panitia GEMASTIK XVII',
      'role' => 'Sekretariat Pusat',
      'phone' => null, // Usually email first
      'email' => 'gemastik@kemdikbud.go.id', // Example email
      'whatsapp' => null
    ],
    (object)[
      'name' => 'Panitia Lokal Univ. Telkom',
      'role' => 'Host Final',
      'phone' => '(022) 7564108', // Example Tel-U number
      'email' => 'gemastik2024@telkomuniversity.ac.id', // Example email
      'whatsapp' => null,
      'website' => 'https://gemastik.telkomuniversity.ac.id/' // Example website
    ]
  ]
];

// Competition 3 (Example: Business Plan Competition)
$competition3 = (object)[
  'id' => 3,
  'name' => 'Lomba Inovasi Digital Mahasiswa',
  'logo' => "logo_lidm.png", // Assuming you have this image
  'categories' => ['Kewirausahaan', 'Riset dan Inovasi'], // Focused categories
  'start_date' => \Carbon\Carbon::parse('2025-01-20'), // Future date
  'end_date' => \Carbon\Carbon::parse('2025-05-30'), // Future date
  'registration_start_date' => \Carbon\Carbon::parse('2025-01-20'),
  'registration_end_date' => \Carbon\Carbon::parse('2025-02-28'),
  'location' => 'Regional (Online) / Nasional (Hybrid - Jakarta)', // Different location setup
  'level' => 'Nasional', // Can be Regional too
  'organizer' => 'Asosiasi Inkubator Bisnis Indonesia (AIBI) & Sponsor Co.',
  'guidebook_url' => '#isbpc-guidebook',
  'overview' => '<p>ISBPC adalah kompetisi rencana bisnis tahunan bagi mahasiswa se-Indonesia yang bertujuan menumbuhkan jiwa kewirausahaan dan melahirkan startup inovatif.</p>
                   <p>Peserta ditantang untuk mengembangkan ide bisnis yang solid, dari konsep hingga strategi pasar, dan mempresentasikannya di hadapan juri investor dan praktisi bisnis.</p>
                   <p>Kategori utama kompetisi:</p>
                   <ul class="list-disc pl-5 space-y-1">
                     <li>Teknologi Digital (Apps, SaaS, AI, etc)</li>
                     <li>Industri Kreatif (Fashion, Film, Game, etc)</li>
                     <li>Agribisnis dan Pangan</li>
                     <li>Bisnis Sosial (Social Enterprise)</li>
                     <li>Manufaktur dan Jasa Umum</li>
                   </ul>',
  'timelines' => [
    (object)[
      'title' => 'Pendaftaran dan Pengumpulan Proposal Awal (Executive Summary)',
      'start_date' => \Carbon\Carbon::parse('2025-01-20'),
      'end_date' => \Carbon\Carbon::parse('2025-02-28'),
      'description' => 'Tim mendaftar dan mengirimkan ringkasan eksekutif ide bisnis.'
    ],
    (object)[
      'title' => 'Pengumuman Lolos Tahap 1 & Pengumpulan Proposal Lengkap',
      'start_date' => \Carbon\Carbon::parse('2025-03-15'),
      'end_date' => \Carbon\Carbon::parse('2025-04-15'),
      'description' => 'Tim yang lolos tahap 1 menyusun dan mengirimkan proposal bisnis lengkap.'
    ],
     (object)[
      'title' => 'Seleksi Proposal Lengkap & Pengumuman Finalis',
      'start_date' => \Carbon\Carbon::parse('2025-04-16'),
      'end_date' => \Carbon\Carbon::parse('2025-05-05'),
      'description' => 'Penjurian proposal lengkap dan pengumuman tim yang maju ke babak final.'
    ],
    (object)[
      'title' => 'Mentoring Finalis (Online)',
      'start_date' => \Carbon\Carbon::parse('2025-05-06'),
      'end_date' => \Carbon\Carbon::parse('2025-05-20'),
      'description' => 'Sesi mentoring bersama praktisi bisnis untuk persiapan final pitching.'
    ],
    (object)[
      'title' => 'Babak Final: Pitching & Awarding (Hybrid)',
      'start_date' => \Carbon\Carbon::parse('2025-05-28'),
      'end_date' => \Carbon\Carbon::parse('2025-05-30'),
      'description' => 'Presentasi final (pitching) di depan juri dan investor, serta malam penganugerahan.'
    ]
  ],
  'first_prize' => 50000000, // Prizes often include seed funding
  'first_prize_description' => 'Seed Funding, Mentorship Eksklusif, Trofi',
  'second_prize' => 30000000,
  'second_prize_description' => 'Seed Funding, Mentorship, Sertifikat',
  'third_prize' => 15000000,
  'third_prize_description' => 'Seed Funding, Sertifikat',
  'additional_prizes' => '<p>Kesempatan mendapatkan:</p>
                             <ul class="list-disc pl-5 space-y-1">
                               <li>Akses ke jaringan investor dan inkubator AIBI.</li>
                               <li>Publikasi media.</li>
                               <li>Penghargaan khusus kategori (misal: Inovasi Terbaik, Dampak Sosial Terbaik).</li>
                             </ul>',
  'rules' => '<h3>Persyaratan Tim</h3>
                  <ul class="list-disc pl-5 space-y-1">
                    <li>Tim terdiri dari 2-4 mahasiswa aktif (S1/D3/D4) dari perguruan tinggi di Indonesia. Boleh lintas jurusan/fakultas.</li>
                    <li>Ide bisnis harus orisinal dan belum menerima pendanaan eksternal yang signifikan.</li>
                    <li>Setiap tim hanya boleh mengajukan satu proposal bisnis.</li>
                    <li>Memiliki dosen pendamping (opsional tapi disarankan).</li>
                  </ul>
                  <h3>Kriteria Penilaian</h3>
                  <ul class="list-disc pl-5 space-y-1">
                    <li>Inovasi dan Keunikan Ide</li>
                    <li>Kelayakan Pasar (Market Viability)</li>
                    <li>Model Bisnis dan Potensi Keuntungan</li>
                    <li>Kualitas Tim</li>
                    <li>Kelengkapan dan Kualitas Proposal/Presentasi</li>
                  </ul>',
  'faqs' => [
    (object)[
      'question' => 'Apakah mahasiswa dari berbagai universitas boleh membentuk satu tim?',
      'answer' => 'Biasanya tidak diperbolehkan. Anggota tim harus berasal dari perguruan tinggi yang sama. Namun, cek kembali guidebook terbaru untuk aturan spesifik tahun tersebut.'
    ],
    (object)[
      'question' => 'Apakah ide bisnis harus sudah berjalan?',
      'answer' => 'Tidak harus. Kompetisi ini terbuka untuk ide bisnis pada tahap konsep maupun yang sudah memiliki prototipe atau pengguna awal (early stage).'
    ],
    (object)[
      'question' => 'Apa format proposal yang harus dikumpulkan?',
      'answer' => 'Format detail proposal (struktur, jumlah halaman, dll.) akan dijelaskan dalam guidebook resmi kompetisi.'
    ],
     (object)[
      'question' => 'Apakah ada biaya pendaftaran?',
      'answer' => 'Tergantung penyelenggara. Beberapa kompetisi bisnis ada yang gratis, ada pula yang mengenakan biaya pendaftaran tim yang wajar. Informasi ini akan ada di pengumuman resmi.'
    ],
  ],
  'contacts' => [
    (object)[
      'name' => 'Sekretariat ISBPC 2025',
      'role' => 'Panitia Pusat',
      'phone' => null,
      'email' => 'info@isbpc.org', // Example email
      'whatsapp' => '+6281122334455' // Example WA number
    ],
     (object)[
      'name' => 'Website ISBPC',
      'role' => 'Informasi & Pendaftaran',
      'phone' => null,
      'email' => null,
      'whatsapp' => null,
      'website' => 'https://www.isbpc-indonesia.org' // Example fictional website
    ]
  ]
];

$competitions = [$competition1, $competition2, $competition3];

?>
@extends('layouts.admin')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 md:mb-0">
                Manage Competitions
            </h2>
            <a href="{{ route('admin.competition.add') }}" class="w-full md:w-auto px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center md:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add New Competition
            </a>
        </div>

        <!-- Search and Filter -->
        <div class="mb-6">
            <form method="GET" action="" class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch">
                <div class="flex-grow">
                    <input type="text" name="search" placeholder="Search competitions..." value="{{ request('search') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="w-full sm:w-auto">
                     <select name="level" class="w-full h-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Levels</option>
                        <option value="Nasional" {{ request('level') == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="Internasional" {{ request('level') == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                        <option value="Regional" {{ request('level') == 'Regional' ? 'selected' : '' }}>Regional</option>
                    </select>
                </div>
                <div class="w-full sm:w-auto">
                     <select name="category" class="w-full h-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Categories</option>
                        <option value="Riset dan Inovasi" {{ request('category') == 'Riset dan Inovasi' ? 'selected' : '' }}>Riset dan Inovasi</option>
                        <option value="Akademik" {{ request('category') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="Seni" {{ request('category') == 'Seni' ? 'selected' : '' }}>Seni</option>
                        <option value="Olahraga" {{ request('category') == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                    </select>
                </div>
                <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-gray-600 text-white font-medium rounded-lg hover:bg-gray-700 transition-colors">
                    Filter
                </button>
            </form>
        </div>

        <!-- Competitions Table -->
<!-- Competitions Table -->
<div class="overflow-x-auto border border-gray-200 rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <!-- Always visible -->
                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Competition
                </th>
                <!-- Hidden on sm and md screens -->
                <th scope="col" class="hidden lg:table-cell px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Level
                </th>
                <!-- Hidden on sm, visible on md and up -->
                <th scope="col" class="hidden md:table-cell px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Dates
                </th>
                <!-- Hidden on sm and md screens -->
                <th scope="col" class="hidden lg:table-cell px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Status
                </th>
                <!-- Always visible -->
                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($competitions as $competition)
            <tr>
                <td class="px-4 py-4 whitespace-normal">
                    <div class="flex items-center">
                        <!-- Logo visible only on md screens and up -->
                        <div class="hidden md:block flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-md object-contain bg-gray-100" src="{{ asset('images/' . $competition->logo) }}" alt="{{ $competition->name }} logo">
                        </div>
                        <div class="md:ml-3">
                            <div class="text-sm font-medium text-gray-900 break-words">
                                <!-- Truncated name on small screens -->
                                <span class="md:hidden">
                                    {{ \Illuminate\Support\Str::limit($competition->name, 20, '...') }}
                                </span>
                                <!-- Full name on md screens and up -->
                                <span class="hidden md:inline">
                                    {{ $competition->name }}
                                </span>
                            </div>
                            <!-- Organizer visible only on lg screens and up -->
                            <div class="hidden lg:block text-sm text-gray-500">
                                {{ $competition->organizer }}
                            </div>
                        </div>
                    </div>
                </td>
                <!-- Level visible only on lg screens and up -->
                <td class="hidden lg:table-cell px-4 py-4 whitespace-nowrap">
                    @php
                        $levelColor = match(strtolower($competition->level)) {
                            'nasional' => 'bg-blue-100 text-blue-800',
                            'internasional' => 'bg-green-100 text-green-800',
                            'regional' => 'bg-purple-100 text-purple-800',
                            default => 'bg-gray-100 text-gray-800',
                        };
                    @endphp
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $levelColor }}">
                        {{ $competition->level }}
                    </span>
                </td>
                <!-- Dates visible only on md screens and up -->
                <td class="hidden md:table-cell px-4 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $competition->start_date->format('d M') }} - {{ $competition->end_date->format('d M Y') }}</div>
                </td>
                <!-- Status visible only on lg screens and up -->
                <td class="hidden lg:table-cell px-4 py-4 whitespace-nowrap">
                    @php
                        $now = now();
                        $status = 'Upcoming';
                        $statusColor = 'bg-gray-100 text-gray-800';
                        if ($now->between($competition->registration_start_date, $competition->registration_end_date)) {
                            $status = 'Registration Open';
                            $statusColor = 'bg-green-100 text-green-800';
                        } elseif ($now->between($competition->start_date, $competition->end_date)) {
                            $status = 'Ongoing';
                            $statusColor = 'bg-yellow-100 text-yellow-800';
                        } elseif ($now->gt($competition->end_date)) {
                            $status = 'Finished';
                            $statusColor = 'bg-red-100 text-red-800';
                        } elseif ($now->lt($competition->registration_start_date)) {
                             $status = 'Upcoming';
                             $statusColor = 'bg-indigo-100 text-indigo-800';
                        }
                    @endphp
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusColor }}">
                        {{ $status }}
                    </span>
                </td>
                <!-- Actions always visible -->
                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                    <div class="flex items-center space-x-3">
                        <a href="" class="text-gray-600 hover:text-gray-900" title="View Details">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                        <a href="{{ route('admin.competition.edit') }}" class="text-indigo-600 hover:text-indigo-900" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>
                        <button type="button" class="text-red-600 hover:text-red-900" onclick="confirmDelete({{ $competition->id }})" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                    No competitions found matching your criteria.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

        <!-- Pagination -->
        <div class="mt-6">
           <nav class="flex items-center justify-between">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Next
                    </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">2</span>
                            of
                            <span class="font-medium">24</span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 3 </a>
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700"> ... </span>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
           </nav>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
        <div class="flex justify-between items-center mb-4">
             <h3 class="text-lg font-medium text-gray-900">Confirm Deletion</h3>
             <button onclick="closeDeleteModal()" class="text-gray-400 hover:text-gray-600">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                 </svg>
             </button>
        </div>
        <p class="text-sm text-gray-600 mb-6">Are you sure you want to delete this competition? This action cannot be undone.</p>
        <div class="flex justify-end space-x-3">
            <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition-colors text-sm font-medium">
                Cancel
            </button>
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors text-sm font-medium">
                    Delete Competition
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        const url = `{{ url('admin/competitions') }}/${id}`;
        document.getElementById('deleteForm').action = url;
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    window.addEventListener('click', function(event) {
        var modal = document.getElementById('deleteModal');
        if (event.target == modal && !modal.classList.contains('hidden')) {
            closeDeleteModal();
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            closeDeleteModal();
        }
    });
</script>
@endsection