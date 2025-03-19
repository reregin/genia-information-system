<?php
$competitions = [
  (object)[
      'title' => 'Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Perguruan Tinggi 2024',
      'image' => asset('images/logo_lidm.png'),
      'category' => 'Riset dan Inovasi',
      'start_date' => '2024-02-19',
      'end_date' => '2024-05-17',
      'level' => 'Provinsi - Nasional',
      'website' => '#',
      'id' => 1
  ],
  (object)[
      'title' => 'National University Debating Championship',
      'image' => asset('images/logo_lidm.png'),
      'category' => 'Seni Budaya',
      'start_date' => '2023-03-19',
      'end_date' => '2023-06-30',
      'level' => 'Provinsi - Nasional',
      'website' => '#',
      'id' => 2
  ],
  (object)[
      'title' => 'Kontes Robot Indonesia 2024',
      'image' => asset('images/logo_lidm.png'),
      'category' => 'Riset dan Inovasi',
      'start_date' => '2024-01-17',
      'end_date' => '2024-07-31',
      'level' => 'Nasional',
      'website' => '#',
      'id' => 3
  ],
  (object)[
    'title' => 'Kontes Robot Indonesia 2024',
    'image' => asset('images/logo_lidm.png'),
    'category' => 'Riset dan Inovasi',
    'start_date' => '2024-01-17',
    'end_date' => '2024-07-31',
    'level' => 'Nasional',
    'website' => '#',
    'id' => 3
  ],
  (object)[
    'title' => 'Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Perguruan Tinggi 2024',
    'image' => asset('images/logo_lidm.png'),
    'category' => 'Riset dan Inovasi',
    'start_date' => '2024-02-19',
    'end_date' => '2024-05-17',
    'level' => 'Provinsi - Nasional',
    'website' => '#',
    'id' => 1
],
(object)[
    'title' => 'National University Debating Championship',
    'image' => asset('images/logo_lidm.png'),
    'category' => 'Seni Budaya',
    'start_date' => '2023-03-19',
    'end_date' => '2023-06-30',
    'level' => 'Provinsi - Nasional',
    'website' => '#',
    'id' => 2
],
(object)[
    'title' => 'Kontes Robot Indonesia 2024',
    'image' => asset('images/logo_lidm.png'),
    'category' => 'Riset dan Inovasi',
    'start_date' => '2024-01-17',
    'end_date' => '2024-07-31',
    'level' => 'Nasional',
    'website' => '#',
    'id' => 3
],
(object)[
  'title' => 'Kontes Robot Indonesia 2024',
  'image' => asset('images/logo_lidm.png'),
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
    'path' => ['Beranda', 'Lomba']
])

@section('style')
    <style>

    </style>
@endsection

@section('content')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>
<body>
<div class="px-4 md:px-8 lg:px-16 mx-auto max-w-screen-xl mb-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($competitions as $competition)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset($competition->image) }}" alt="{{ $competition->title }}" class="w-full h-40 object-contain p-4">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-orange-600">{{ $competition->title }}</h3>
                    <span class="inline-block bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full mt-2">
                        {{ $competition->category }}
                    </span>
                    <p class="text-gray-600 text-sm mt-2">{{ date('d M', strtotime($competition->start_date)) }} - {{ date('d M Y', strtotime($competition->end_date)) }}</p>
                    <p class="text-gray-500 text-sm">{{ $competition->level }}</p>
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ $competition->website }}" class="border border-orange-500 text-orange-500 px-4 py-1 rounded-lg text-sm hover:bg-orange-500 hover:text-white transition">Laman</a>
                        <a href="" class="border border-orange-500 text-orange-500 px-4 py-1 rounded-lg text-sm hover:bg-orange-500 hover:text-white transition">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



</body>
@endsection