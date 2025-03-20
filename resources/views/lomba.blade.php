<?php
$competitions = [
  (object)[
      'title' => 'Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Perguruan Tinggi 2024',
      'image' => asset('images/logo-onmipa.png'),
      'category' => 'Riset dan Inovasi',
      'start_date' => '2024-02-19',
      'end_date' => '2024-05-17',
      'level' => 'Provinsi - Nasional',
      'website' => '#',
      'id' => 1
  ],
  (object)[
      'title' => 'Lomba Inovasi Digital Mahasiswa',
      'image' => asset('images/logo_lidm.png'),
      'category' => 'Seni Budaya',
      'start_date' => '2023-03-19',
      'end_date' => '2023-06-30',
      'level' => 'Provinsi - Nasional',
      'website' => '#',
      'id' => 2
  ],
  (object)[
      'title' => 'Pagelaran Mahasiswa Nasional Bidang Teknologi Informasi dan Komunikas',
      'image' => asset('images/logo_gemastik2.png'),
      'category' => 'Riset dan Inovasi',
      'start_date' => '2024-01-17',
      'end_date' => '2024-07-31',
      'level' => 'Nasional',
      'website' => '#',
      'id' => 3
  ],
  (object)[
    'title' => 'Program Kreativitas Mahasiswa',
    'image' => asset('images/logo_pkm.png'),
    'category' => 'Riset dan Inovasi',
    'start_date' => '2024-01-17',
    'end_date' => '2024-07-31',
    'level' => 'Nasional',
    'website' => '#',
    'id' => 3
  ],
];
?>


@extends('layouts.app', [
    'path' => []
])

@section('style')
    <style>

    </style>
@endsection

@section('content')
<head>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>
<body>

<div class="w-screen flex flex-col items-center text-center py-9">
    <h1 id="typewriter" class="text-7xl font-normal leading-tight [text-shadow:_0_2px_2_rgb(0_0_0_/_50%)]"></h1>
    <p class="text-lg text-gray-600 mt-2 max-w-2xl">
        Join us in achieving excellence through innovation, creativity, and dedication.
    </p>
</div>
<div class="px-4 md:px-8 lg:px-16 mx-auto max-w-screen-xl mb-12">
    <div class="flex items-center mb-6 mt-6">
            <div class="flex-grow border-t border-gray-500"></div>
            <span class="px-4 text-lg text-gray-500 font-semibold">2025</span>
            <div class="flex-grow border-t border-gray-500"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">
    @foreach($competitions as $competition)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col h-full hover:shadow-2xl hover:shadow-inner">
            <img src="{{ asset($competition->image) }}" alt="{{ $competition->title }}" class="w-full h-40 object-contain p-4">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold text-[#E08300]">{{ $competition->title }}</h3>
                    <span class="inline-block bg-[#0073EF] text-white text-xs font-bold px-3 py-1 rounded-full mt-2">
                        {{ $competition->category }}
                    </span>
                    <p class="text-gray-600 text-sm mt-2">{{ date('d M', strtotime($competition->start_date)) }} - {{ date('d M Y', strtotime($competition->end_date)) }}</p>
                    <p class="text-gray-500 text-sm">{{ $competition->level }}</p>
                </div>
                <div class="mt-4 flex space-x-2 justify-start">
                    <a href="{{ $competition->website }}" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Laman</a>
                    <a href="" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>

<div class="px-4 md:px-8 lg:px-16 mx-auto max-w-screen-xl mb-12">
    <div class="flex items-center mb-8 mt-6">
            <div class="flex-grow border-t border-gray-500"></div>
            <span class="px-4 text-lg text-gray-500 font-semibold">2024</span>
            <div class="flex-grow border-t border-gray-500"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">
    @foreach($competitions as $competition)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col h-full hover:shadow-2xl hover:shadow-inner">
            <img src="{{ asset($competition->image) }}" alt="{{ $competition->title }}" class="w-full h-40 object-contain p-4">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold text-[#E08300]">{{ $competition->title }}</h3>
                    <span class="inline-block bg-[#0073EF] text-white text-xs font-bold px-3 py-1 rounded-full mt-2">
                        {{ $competition->category }}
                    </span>
                    <p class="text-gray-600 text-sm mt-2">{{ date('d M', strtotime($competition->start_date)) }} - {{ date('d M Y', strtotime($competition->end_date)) }}</p>
                    <p class="text-gray-500 text-sm">{{ $competition->level }}</p>
                </div>
                <div class="mt-4 flex space-x-2 justify-start">
                    <a href="{{ $competition->website }}" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Laman</a>
                    <a href="" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>


<script>
    var typed = new Typed("#typewriter", {
        strings: ["Empowering the Future"],
        typeSpeed: 50,   // Speed of typing
        backSpeed: 50,    // Speed of backspacing
        startDelay: 0,  // Delay before typing starts
        showCursor: false,
        loop: false       // Set to true if you want the animation to repeat
    });
</script>
</body>
@endsection