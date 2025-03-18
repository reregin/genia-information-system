@extends('layouts.app', [
    'path' => ['Beranda', 'Awarded']
])
@section('title', 'News Page')

@section('content')
    <div class="min-h-screen bg-white space-y-8">
        <section class="flex flex-col bg-[#0073EF] items-center py-48">
            <div class="text-8xl text-white justify-center items-center">
                <p>Genia News</p>
            </div>
            <div class="text-lg text-white items-center justify-center mt-8">
                <p>UKM Genia Information Section</p>
            </div>
        </section>
        <section class=" flex flex-col items-center py-48">
            <div class="text-6xl text-semibold justify-center items-center">
                <p>Recent Updates From UKM Genia</p>
            </div>
        </section>
    </div>
@endsection