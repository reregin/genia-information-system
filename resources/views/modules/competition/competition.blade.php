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

<div class="w-screen flex flex-col items-center text-center py-9 px-4">
    <h1 id="typewriter" class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-normal leading-tight [text-shadow:_0_2px_2_rgb(0_0_0_/_50%)]"></h1>
    <p class="text-lg text-gray-600 mt-2 max-w-md sm:max-w-xl md:max-w-2xl">
        Ayo ikuti lomba-lomba ini, berkreasi, berinovasi dan jadilah juara!
    </p>
</div>

@if(count($nextYearCompetitions) > 0)
<div class="px-4 md:px-8 lg:px-16 mx-auto max-w-screen-xl mb-12">
    <div class="flex items-center mb-6 mt-6">
            <div class="flex-grow border-t border-gray-500"></div>
            <span class="px-4 text-lg text-gray-500 font-semibold">{{ $nextYear }}</span>
            <div class="flex-grow border-t border-gray-500"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">
    @foreach($nextYearCompetitions as $competition)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col h-full hover:shadow-2xl hover:shadow-inner">
            <img src="{{ $competition->logo ? asset('storage/' . $competition->logo) : asset('images/default-logo.png') }}" 
                 alt="{{ $competition->name }}" class="w-full h-40 object-contain p-4">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold text-[#E08300]">{{ $competition->name }}</h3>
                    <span class="inline-block bg-[#0073EF] text-white text-xs font-bold px-3 py-1 rounded-full mt-2">
                        {{ is_array($competition->categories) && !empty($competition->categories) ? $competition->categories[0] : 'General' }}
                    </span>
                    <p class="text-gray-600 text-sm mt-2">
                        {{ $competition->start_date->format('d M') }} - {{ $competition->end_date->format('d M Y') }}
                    </p>
                    <p class="text-gray-500 text-sm">{{ $competition->level }}</p>
                </div>
                <div class="mt-4 flex space-x-2 justify-start">
                    <a href="{{ $competition->guidebook_url ?? '#' }}" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Laman</a>
                    <a href="{{ route('competition.details', $competition->id) }}" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endif

@if(count($currentYearCompetitions) > 0)
<div class="px-4 md:px-8 lg:px-16 mx-auto max-w-screen-xl mb-12">
    <div class="flex items-center mb-8 mt-6">
            <div class="flex-grow border-t border-gray-500"></div>
            <span class="px-4 text-lg text-gray-500 font-semibold">{{ $currentYear }}</span>
            <div class="flex-grow border-t border-gray-500"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">
    @foreach($currentYearCompetitions as $competition)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col h-full hover:shadow-2xl hover:shadow-inner">
            <img src="{{ $competition->logo ? asset('storage/' . $competition->logo) : asset('images/default-logo.png') }}" 
                 alt="{{ $competition->name }}" class="w-full h-40 object-contain p-4">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold text-[#E08300]">{{ $competition->name }}</h3>
                    <span class="inline-block bg-[#0073EF] text-white text-xs font-bold px-3 py-1 rounded-full mt-2">
                        {{ is_array($competition->categories) && !empty($competition->categories) ? $competition->categories[0] : 'General' }}
                    </span>
                    <p class="text-gray-600 text-sm mt-2">
                        {{ $competition->start_date->format('d M') }} - {{ $competition->end_date->format('d M Y') }}
                    </p>
                    <p class="text-gray-500 text-sm">{{ $competition->level }}</p>
                </div>
                <div class="mt-4 flex space-x-2 justify-start">
                    <a href="{{ $competition->guidebook_url ?? '#' }}" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Laman</a>
                    <a href="{{ route('competition.details', $competition->id) }}" class="border border-[#E08300] text-[#E08300] px-4 py-1 rounded-lg text-sm hover:bg-[#E08300] hover:text-white transition">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endif

<script>
    var typed = new Typed("#typewriter", {
        strings: ["Empowering the Future"],
        typeSpeed: 50,
        backSpeed: 50,
        startDelay: 0,
        showCursor: false,
        loop: false
    });
</script>
</body>
@endsection