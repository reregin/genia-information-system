@extends('layouts.app', [ 'path' => ['Beranda', 'Blog', 'Send'] ])

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">Punya cerita yang ingin anda ceritakan?</h1>
        <p class="text-gray-700 mb-6 text-center">Ayo bagikan pada kami dan akan kami tampilkan pada website Genia!</p>

        <div class="bg-gray-100 p-6 rounded-lg">
            <p class="text-gray-800 mb-4">Kirim email ke: <a href="mailto:genia@gmail.com" class="text-blue-600 underline">genia@gmail.com</a></p>
            <p class="text-gray-800 mb-2">Gunakan format berikut saat mengirimkan cerita Anda:</p>

            <div class="bg-white p-4 rounded-lg border border-gray-300 text-sm text-gray-700 whitespace-pre-line">Nama
Judul (draft) :
No Telepon :
Isi Blog :

*Silakan attach file jika menggunakan file untuk isi
            </div>

            <div class="mt-6 text-center">
                <a href="mailto:genia@gmail.com" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300">
                    Kirim Cerita
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
