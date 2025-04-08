@extends('layouts.app', [ 'path' => ['Beranda', 'News', 'Details'] ])

<?php
$news = (object)[
  'title' => 'Mahasiswa UKM Genia Raih Juara 1 dalam Kompetisi PKM Nasional',
  'excerpt' => 'Tim mahasiswa dari UKM Genia berhasil meraih prestasi gemilang dalam ajang Pekan Kreativitas Mahasiswa (PKM) tingkat nasional dengan inovasi teknologi berkelanjutan.',
  'content' => '<p>Dalam ajang bergengsi Pekan Kreativitas Mahasiswa (PKM) tingkat nasional yang diselenggarakan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi, tim mahasiswa dari UKM Genia berhasil menorehkan prestasi membanggakan dengan meraih juara 1 dalam kategori PKM-KC (Karsa Cipta).</p>

<h2>Inovasi Berkelanjutan</h2>
<p>Tim yang terdiri dari lima mahasiswa ini mengembangkan sebuah sistem inovatif yang menggabungkan teknologi IoT dengan konsep berkelanjutan untuk mengatasi permasalahan pengelolaan sampah di perkotaan. Solusi yang mereka tawarkan tidak hanya efektif tetapi juga ramah lingkungan.</p>

<h2>Dampak dan Potensi</h2>
<p>Inovasi ini dinilai memiliki potensi besar untuk diterapkan secara luas dan memberikan dampak positif bagi masyarakat. Dewan juri mengapresiasi pendekatan komprehensif tim dalam menyelesaikan permasalahan dengan mempertimbangkan aspek teknologi, sosial, dan lingkungan.</p>

<h2>Dukungan dan Bimbingan</h2>
<p>Keberhasilan ini tidak lepas dari dukungan penuh universitas dan bimbingan intensif dari para dosen pembimbing. UKM Genia terus berkomitmen untuk mendorong inovasi dan kreativitas mahasiswa dalam mengembangkan solusi teknologi yang bermanfaat bagi masyarakat.</p>

<h2>Rencana Ke Depan</h2>
<p>Tim berencana untuk mengembangkan lebih lanjut inovasi mereka dan berharap dapat mengimplementasikannya dalam skala yang lebih luas. Prestasi ini juga diharapkan dapat memotivasi mahasiswa lain untuk terus berkarya dan berinovasi.</p>',
  'featured_image' => 'news-pkm.jpg',
  'category' => 'Competition',
  'level' => 'National',
  'author_name' => "Tim Humas Genia",
  'published' => true,
  'created_at' => \Carbon\Carbon::parse('2024-03-15 10:00:00'),
  'updated_at' => \Carbon\Carbon::parse('2024-03-15 10:00:00'),
];
?>

@section('content')
<div class="container mx-auto px-4 py-8 max-w-4xl">
    <!-- Article Header -->
    <div class="mb-8">
        <div class="flex items-center gap-3 mb-4">
            <span class="inline-block bg-blue-100 text-blue-600 px-2 py-1 text-xs font-medium rounded">{{ $news->category }}</span>
            <span class="inline-block bg-green-100 text-green-600 px-2 py-1 text-xs font-medium rounded">{{ $news->level }}</span>
            <span class="text-gray-500 text-sm">{{ $news->created_at->format('F j, Y') }}</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ $news->title }}</h1>
        
        <!-- Author info -->
        <div class="flex items-center mb-6">
            <div class="h-10 w-10 rounded-full bg-gray-300 overflow-hidden">
                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="ml-3">
                <p class="text-gray-800 font-medium">{{ $news->author_name }}</p>
                <p class="text-gray-500 text-sm">News Team</p>
            </div>
        </div>
    </div>
    
    <!-- Featured Image -->
    @if($news->featured_image)
    <div class="mb-8">
        <img src="{{ asset('images/'.$news->featured_image) }}" 
             alt="{{ $news->title }}" 
             class="w-full h-auto rounded-lg shadow-md">
    </div>
    @endif
    
    <!-- Article Content -->
    <div class="prose prose-lg max-w-none">
        {!! html_entity_decode($news->content) !!}
    </div>
    
    <!-- Share Section -->
    <div class="mt-12 border-t pt-8">
        <h3 class="text-lg font-semibold mb-4">Share this article</h3>
        <div class="flex gap-4">
            <a href="#" class="text-gray-600 hover:text-blue-600">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-blue-600">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-blue-600">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Back to News Link -->
    <div class="mt-12">
        <a href="{{ route('news') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to All News
        </a>
    </div>
</div>
@endsection 