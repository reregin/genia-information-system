@extends('layouts.app',[
  'path' => ['']
])

@section('content')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="flex flex-col justify-center items-center w-full">
        <div class="w-full bg-blue-100 p-6 rounded-lg shadow-xl">
            <h2 class="text-black text-center text-2xl font-semibold mb-4">Fokus Kompetisi Kami</h2>

            <!-- Center the swiper -->
            <div class="flex justify-center">
                <div class="swiper mySwiper w-3/4">
                    <div class="swiper-wrapper">
                        <!-- Card Items -->
                        <div class="swiper-slide flex justify-center">
                            <div class="bg-blue-50 shadow-xl text-black text-center p-4 rounded-lg flex flex-col items-center justify-center w-72 h-28">
                                <img src="{{ asset("images/logo_onmipa.png") }}" alt="ON-MIPA" class="w-full h-20 object-cover"> 
                            </div>
                        </div>

                        <div class="swiper-slide flex justify-center">
                            <div class="bg-blue-50 shadow-xl text-black text-center p-4 rounded-lg flex flex-col items-center justify-center w-72 h-28">
                                <img src="{{ asset("images/logo_pkm.png") }}" alt="PKM" class="w-full h-20 object-cover"> 
                            </div>
                        </div>

                        <div class="swiper-slide flex justify-center">
                            <div class="bg-blue-50 shadow-xl text-black text-center p-4 rounded-lg flex flex-col items-center justify-center w-72 h-28">
                                <img src="{{ asset("images/logo_gemastik2.png") }}" alt="GELATIK" class="w-full h-20 object-cover"> 
                            </div>
                        </div>

                        <div class="swiper-slide flex justify-center">
                            <div class="bg-blue-50 shadow-xl text-black text-center p-4 rounded-lg flex flex-col items-center justify-center w-72 h-28">
                                <img src={{ asset("images/logo_lidm.png") }} alt="COMPETE" class="w-full h-20 object-cover"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 8,
            centeredSlides: true, // Center the active slide
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script>
</body>
@endsection
