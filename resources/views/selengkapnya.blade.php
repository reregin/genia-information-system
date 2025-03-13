@extends('layouts.app', [
    'path' => ['Beranda', 'Selengkapnya']
])

@section('content')

<!-- HERO -->
<div class="mt-10 md:mt-10 text-center">
    <span class="hidden md:inline text-6xl font-bold leading-extra-loose" style="color: #2B42BE">LOREM IPSUM<br>DOLOR SIT AMET</span>
    <h1 class="inline md:hidden text-xl font-bold leading-8 " style="color: #2B42BE">LOREM IPSUM DOLOR<br> SIT AMET
    </h1>
    <div class="main-foto-card flex flex-col items-center mt-24 md:mt-56">
        <div class="w-60 md:w-100 h-52 md:h-96 rounded-[10px] md:rounded-[20px]"
            style="background: linear-gradient(180deg, #ADCEFF 0%, rgba(246, 247, 249, 0) 100%, #F6F7F9 100%);">
            <div class="flex justify-center md:mt-8 relative top-[-80px] md:top-[-165px] bg-transparent">
                <img src=" {{ $kepalaDosen['pathFoto'] }} " class="w-[190px] md:w-[320px] bg-transparent">
            </div>
        </div>
        <div class="text-center mt-6">
            <h2 class="text-lg md:text-4xl font-bold md:leading-10"> {{ $kepalaDosen['nama'] }} </h2>
            <p class="text-xs md:text-2xl font-medium md:leading-8"> {{ $kepalaDosen['jabatan'] }} </p>
        </div>
    </div>
</div>

<!-- DOSEN CARD -->
<div class="mt-20 md:mt-32 text-center">
    <h1 class="hidden md:inline text-4xl font-bold leading-10" style="color: #2B42BE">LOREM IPSUM DOLOR SIT <br>AMET
    </h1>
    <h1 class="inline md:hidden text-base font-bold leading-5" style="color: #2B42BE">LOREM IPSUM <br>DOLOR SIT AMET</h1>
    <div class="flex flex-col md:flex-row justify-center gap-8">
        @foreach ($dataDosen as $dosen)
            <div class="main-foto-card flex flex-col items-center mt-32">
                <div class="w-60 md:w-80 h-52 md:h-72 rounded-[10px] md:rounded-[20px]"
                    style="background: linear-gradient(180deg, #ADCEFF 0%, rgba(246, 247, 249, 0) 100%, #F6F7F9 100%);">
                    <div class="flex justify-center relative top-[-80px] md:top-[-122px] bg-transparent">
                        <img src=" {{ $dosen['pathFoto'] }} " class="w-[190px] md:w-[280px] bg-transparent">
                    </div>
                </div>
                <div class="text-center mt-6 md:mt-20">
                    <h2 class="text-lg md:text-2xl font-bold md:leading-8"> {{ $dosen['nama'] }} </h2>
                    <p class="text-xs md:text-xl font-medium md:font-normal md:leading-8"> {{ $dosen['jabatan'] }} </p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- ASISTENT CARD -->
<div class="mt-28 md:mt-44 mb-11 md:mb-36 text-center">
    <h1 class="text-xl md:text-6xl font-bold leading-8 md:leading-extra-loose" style="color: #2B42BE">LOREM IPSUM
        <br>DOLOR SIT AMET
    </h1>
    <div class="flex flex-wrap justify-center gap-x-10 gap-y-10 mt-6 md:mt-24">
        @foreach ($dataAsisten as $asisten)
            <div class="w-72 h-90 bg-white rounded-xl flex flex-col items-center justify-around p-6">
                <div class="w-60 h-52 rounded-lg">
                    <img src="{{ $asisten['pathFoto'] }}" class="rounded-lg">
                </div>
                <div class="text-left mt-5 font-medium">
                    <p class="text-xl font-medium flex items-center">
                        {{ $asisten['nama'] }}
                        <span class="flex items-center mx-2 mt-1.5">
                            <svg width="1" height="10" viewBox="0 0 1 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.625" y1="0.378662" x2="0.625" y2="9.37866" stroke="#E7EAEE"
                                    stroke-width="0.75" />
                            </svg>
                        </span>
                        <span class="font-normal text-xs text-blue-600 mt-1.5"> {{ $asisten['jabatan'] }} </span>
                    </p>
                    <div class="my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="236" height="1" viewBox="0 0 236 1" fill="none">
                            <line x1="0.5" y1="0.503662" x2="235.25" y2="0.503662" stroke="#E7EAEE" stroke-width="0.75" />
                        </svg>
                    </div>
                    <div class="flex gap-2">
                        <a href=" {{ $asisten['linkTwitter'] }} ">
                            <div class="w-7 h-7 flex justify-center items-center rounded"
                                style="background-color: #F6F7F9;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10"
                                    fill="none">
                                    <path
                                        d="M12.322 1.24413C11.8847 1.4376 11.4208 1.56466 10.9459 1.62111C11.4465 1.32172 11.8211 0.850542 12.0001 0.295378C11.5303 0.574961 11.0152 0.770899 10.4784 0.876888C10.1178 0.491074 9.63986 0.235201 9.11884 0.149047C8.59783 0.0628923 8.06295 0.151285 7.59735 0.400481C7.13176 0.649678 6.76154 1.04572 6.54425 1.52703C6.32696 2.00834 6.27477 2.54796 6.3958 3.06199C5.4431 3.01424 4.51109 2.76667 3.66028 2.33534C2.80948 1.90402 2.05889 1.29858 1.45726 0.558347C1.2443 0.924126 1.13239 1.33993 1.13298 1.76319C1.13298 2.59392 1.5558 3.32783 2.19861 3.75751C1.8182 3.74554 1.44616 3.6428 1.11351 3.45788V3.48767C1.11362 4.04093 1.30507 4.57714 1.6554 5.00536C2.00572 5.43358 2.49336 5.72747 3.03564 5.8372C2.6825 5.9329 2.31222 5.947 1.95283 5.87845C2.10572 6.35468 2.40372 6.77117 2.80509 7.06961C3.20647 7.36804 3.69113 7.53349 4.19121 7.54277C3.6942 7.93312 3.12512 8.22167 2.51651 8.39193C1.9079 8.5622 1.2717 8.61083 0.644287 8.53506C1.73953 9.23943 3.0145 9.61336 4.31668 9.61215C8.72413 9.61215 11.1344 5.96095 11.1344 2.79444C11.1344 2.69132 11.1315 2.58704 11.1269 2.48507C11.5961 2.14599 12.001 1.72596 12.3226 1.2447L12.322 1.24413Z"
                                        fill="#07090D" />
                                </svg>
                            </div>
                        </a>
                        <a href=" {{ $asisten['linkFacebook'] }} ">
                            <div class="w-7 h-7 flex justify-center items-center rounded"
                                style="background-color: #F6F7F9;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"
                                    fill="none">
                                    <path
                                        d="M6.49992 0.149414C3.3357 0.149414 0.770752 2.71436 0.770752 5.87858C0.770752 8.73801 2.86591 11.1082 5.60502 11.5384V7.53431H4.14981V5.87858H5.60502V4.61645C5.60502 3.18072 6.45981 2.3878 7.76893 2.3878C8.3957 2.3878 9.05112 2.49952 9.05112 2.49952V3.90889H8.32924C7.61711 3.90889 7.39539 4.35061 7.39539 4.80379V5.87858H8.98409L8.73028 7.53431H7.39539V11.5384C10.1339 11.1087 12.2291 8.73744 12.2291 5.87858C12.2291 2.71436 9.66414 0.149414 6.49992 0.149414Z"
                                        fill="#07090D" />
                                </svg>
                            </div>
                        </a>
                        <a href=" {{ $asisten['linkInstagram'] }} ">
                            <div class="w-7 h-7 flex justify-center items-center rounded"
                                style="background-color: #F6F7F9;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"
                                    fill="none">
                                    <path
                                        d="M6.49992 0.149414C8.05653 0.149414 8.25075 0.155143 8.86148 0.183789C9.47164 0.212435 9.887 0.308112 10.2525 0.450195C10.6306 0.595716 10.9492 0.792799 11.2677 1.11077C11.5591 1.39717 11.7845 1.74361 11.9283 2.12598C12.0698 2.49092 12.1661 2.90686 12.1947 3.51702C12.2216 4.12775 12.2291 4.32197 12.2291 5.87858C12.2291 7.43519 12.2234 7.62941 12.1947 8.24014C12.1661 8.8503 12.0698 9.26566 11.9283 9.63118C11.7849 10.0138 11.5594 10.3603 11.2677 10.6464C10.9813 10.9376 10.6348 11.163 10.2525 11.307C9.88758 11.4485 9.47164 11.5447 8.86148 11.5734C8.25075 11.6003 8.05653 11.6077 6.49992 11.6077C4.9433 11.6077 4.74909 11.602 4.13836 11.5734C3.5282 11.5447 3.11284 11.4485 2.74731 11.307C2.36479 11.1634 2.01829 10.938 1.73211 10.6464C1.44072 10.36 1.2153 10.0136 1.07153 9.63118C0.92945 9.26624 0.833773 8.8503 0.805127 8.24014C0.7782 7.62941 0.770752 7.43519 0.770752 5.87858C0.770752 4.32197 0.776481 4.12775 0.805127 3.51702C0.833773 2.90629 0.92945 2.4915 1.07153 2.12598C1.2149 1.74337 1.44038 1.39684 1.73211 1.11077C2.01838 0.819286 2.36485 0.593842 2.74731 0.450195C3.11284 0.308112 3.52763 0.212435 4.13836 0.183789C4.74909 0.156862 4.9433 0.149414 6.49992 0.149414ZM6.49992 3.014C5.74018 3.014 5.01157 3.3158 4.47435 3.85301C3.93714 4.39023 3.63534 5.11885 3.63534 5.87858C3.63534 6.63832 3.93714 7.36693 4.47435 7.90415C5.01157 8.44136 5.74018 8.74316 6.49992 8.74316C7.25965 8.74316 7.98827 8.44136 8.52549 7.90415C9.0627 7.36693 9.3645 6.63832 9.3645 5.87858C9.3645 5.11885 9.0627 4.39023 8.52549 3.85301C7.98827 3.3158 7.25965 3.014 6.49992 3.014ZM10.2239 2.87077C10.2239 2.68083 10.1484 2.49868 10.0141 2.36438C9.87982 2.23007 9.69767 2.15462 9.50773 2.15462C9.3178 2.15462 9.13564 2.23007 9.00134 2.36438C8.86704 2.49868 8.79159 2.68083 8.79159 2.87077C8.79159 3.0607 8.86704 3.24286 9.00134 3.37716C9.13564 3.51146 9.3178 3.58691 9.50773 3.58691C9.69767 3.58691 9.87982 3.51146 10.0141 3.37716C10.1484 3.24286 10.2239 3.0607 10.2239 2.87077ZM6.49992 4.15983C6.95576 4.15983 7.39293 4.34091 7.71526 4.66324C8.03759 4.98557 8.21867 5.42274 8.21867 5.87858C8.21867 6.33442 8.03759 6.77159 7.71526 7.09392C7.39293 7.41625 6.95576 7.59733 6.49992 7.59733C6.04408 7.59733 5.60691 7.41625 5.28458 7.09392C4.96225 6.77159 4.78117 6.33442 4.78117 5.87858C4.78117 5.42274 4.96225 4.98557 5.28458 4.66324C5.60691 4.34091 6.04408 4.15983 6.49992 4.15983Z"
                                        fill="#07090D" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection