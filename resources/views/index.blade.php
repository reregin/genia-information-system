<?php
$images = [
    [
        'src' => asset('images/kegiatan-lab-fakultas-teknik-unsrat_2.png'),
        'quote' => '"Working here inspires me to think bigger than myself."',
        'date' => '1 Januari 19000',
    ],
    [
        'src' => asset('images/kegiatan-lab-fakultas-teknik-unsrat_2.png'),
        'quote' => '"We all share a great responsibility in helping shape the future."',
        'date' => '1 Januari 19000',
    ],
    [
        'src' => asset('images/kegiatan-lab-fakultas-teknik-unsrat_2.png'),
        'quote' => '"To be a successful engineer, empathy is key."',
        'date' => '1 Januari 19000',
    ],
    [
        'src' => asset('images/kegiatan-lab-fakultas-teknik-unsrat_2.png'),
        'quote' => '"Learn something new; there’s nothing stopping you."',
        'date' => '1 Januari 19000',
    ],
    [
        'src' => asset('images/kegiatan-lab-fakultas-teknik-unsrat_2.png'),
        'quote' => '"We start from a position of putting people first."',
        'date' => '1 Januari 19000',
    ],
    [
        'src' => asset('images/kegiatan-lab-fakultas-teknik-unsrat_2.png'),
        'quote' => '"People’s lives change once they’re able to connect."',
        'date' => '1 Januari 19000',
    ],
    [
        'src' => asset('images/kegiatan-lab-fakultas-teknik-unsrat_2.png'),
        'quote' => '"We are solution-seekers and bold builders."',
        'date' => '1 Januari 19000',
    ],
];
?>

@extends('layouts.app',[
  'path' => ['Beranda']
  ])

@section('style')
<style>
    .highlight {
        position: relative;
        display: inline-block;
        text-align: center;
    }

    .highlight::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 35%;
        /* Cover the bottom 50% */
        background-color: #ADCEFF;
        /* Custom background color */
        z-index: -1;
    }

    .expanded {
        width: 774px;
        height: 522px;
        filter: brightness(0.5);
    }

    .expanded-content {
        color: white;
    }

    .collapsed {
        width: 46px;
        object-fit: cover;
        object-position: center;
        height: 522px;
    }

    .collapsed-small {
        height: 471px;
    }

    .sm-expanded {
        width: 183px;
        height: 146px;
        filter: brightness(0.5);
    }

    .sm-collapsed {
        width: 10px;
        height: 146px;
        object-fit: cover;
        object-position: center;
    }

    .sm-collapsed-small {
        height: 131px;
    }

    .image-container {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        overflow-x: hidden;
    }
</style>
@endsection

@section('content')
<div class="mt-11 lg:mt-32" style="text-align: center;">
    <p class="mb-6 text-[8px] lg:text-base text-[#5568CB]">LOREM IPSUM DOLOR SIT AMET</p>
    <h1 class="mb-4 text-2xl lg:text-8xl font-bold leading-none tracking-tight text-gray-900 py-2.5 lg:py-8">
        Technology belongs to<span
            class="text-transparent bg-clip-text bg-gradient-to-r from-[#0038FF] via-[#0038FF]/50 to-[#6D99DA]"><br>everyone</span>
    </h1>
    <p class="mx-10 mb-6 text-[8px] lg:text-base text-[#1F2937] font-regular lg:font-semibold"><i>Lorem Ipsum Dolor Sit
            Amet Lorem
            Ipsum
            Dolor Sit Amet Lorem Ipsum Dolor Sit Amet</i></p>
</div>

<div class="mt-14 mx-16 lg:mt-52">
    <h2 class="text-xl lg:text-6xl font-bold text-[#2B42BE]" style="text-align: center;">
        LOREM IPSUM <br>DOLOR SIT AMET
    </h2>

    <div class="container py-8 lg:mt-20 mx-auto">
        <!-- Fasilitas -->
        <div class="flex flex-col md:flex-row items-center mb-16 lg:mb-24">
            <div class="md:w-1/2 mb-4 md:mb-0">
                <img src="{{ asset('images/laboratorium-fakultas-teknik.png') }}"
                    alt="Laboratorium Fakultas Teknik" class="w-full h-auto rounded-lg">
            </div>
            <div class="md:w-1/2 lg:px-14 text-center lg:text-left">
                <h2 class="highlight text-xl lg:text-5xl font-bold text-blue-600 relative z-10">Fasilitas</h2>
                <p class="text-xs lg:text-2xl mt-2 text-gray-700 text-left">Lorem ipsum dolor sit amet, consectetur
                    adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <!-- Dosen -->
        <div class="flex flex-col md:flex-row items-center mb-6 lg:mb-12">
            <div class="md:w-1/2 mb-4 md:mb-0 md:order-2 self-stretch">
                <img src="{{ asset('images/dosen-fakultas-teknik.png') }}" alt="Dosen"
                    class="w-full h-auto rounded-lg">
            </div>
            <div class="md:w-1/2 md:order-1 lg:px-14 text-center lg:text-right">
                <h2 class="highlight text-xl lg:text-5xl font-bold text-blue-600 relative z-10">Dosen</h2>
                <p class="text-xs lg:text-2xl mt-2 text-gray-700 text-right">Lorem ipsum dolor sit amet, consectetur
                    adipiscing
                    elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <!-- Selengkapnya -->
        <div class="text-center">
            <a href="#"
                class="text-[6.75px] lg:text-base inline-block mt-4 text-blue-600 border border-blue-600 rounded px-4 py-2 hover:bg-blue-600 hover:text-white transition">Selengkapnya
                tentang Tim Kami</a>
        </div>
    </div>
</div>

<div class="bg-white p-6 rounded-lg shadow-lg w-auto items-center justify-center mx-10 mt-10 lg:mt-36">
    <h1 class="text-xl lg:text-5xl font-bold text-center mb-4 text-blue-600">Lokasi Laboratorium</h1>
    <p class="text-xs lg:text-2xl text-center mb-4 lg:mb-9 lg:px-52">FR5G+86M, Fakultas Teknik Universitas Sam
        Ratulangi, Jl. Kampus Barat,
        Bahu, Kec. Malalayang, Kota Manado, Sulawesi Utara</p>

    <div class="w-full h-72 lg:h-[554px]">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.83415064019!2d124.67304468154906!3d1.4582990405476983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328775002530a52f%3A0x5f19e5b72a0fd254!2sGedung%20Laboratorium%20Terpadu%20Fakultas%20Teknik!5e0!3m2!1sen!2sid!4v1722538374370!5m2!1sen!2sid&z=18"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</div>

<div class="mt-24 lg:mt-36">
    <h2 class="text-xl lg:text-6xl font-bold text-[#2B42BE]" style="text-align: center;">
        LOREM IPSUM <br>DOLOR SIT AMET
    </h2>

    <div class="lg:flex mt-6 lg:mt-24">
        <div class="lg:w-full lg:p-4 lg:flex items-center mx-4">
            <div class="lg:w-1/2 text-xs lg:text-2xl text-blue-600 font-medium tracking-[3px] lg:tracking-[6px]">
                KEGIATAN LAB FATEK UNSRAT
            </div>
            <div class="lg:w-1/2 text-[9px] lg:text-xl text-gray-700 mt-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center my-8 lg:my-24">
        <div class="image-container flex flex-row align-items-flex-end h-[146px] lg:h-[522px]">
            @foreach ($images as $image)
                <div class="relative">
                    <img src="{{ $image['src'] }}" alt=""
                        class="object-cover cursor-pointer mx-[5px] lg:mx-[22px] lazyload transition-all duration-300 ease-in-out"
                        data-image-id="{{ $loop->index }}" onclick="toggleExpand(this)" loading="lazy">
                    <div class="hidden absolute top-0 left-0 w-full h-full flex flex-col pt-2.5 lg:pt-11 pb-2 lg:pb-8 pl-5 lg:pl-16 pr-20 lg:pr-96 expanded-content"
                        data-image-id="{{ $loop->index }}">
                        <!-- Top Section: Stick to top -->
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-2 lg:size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span
                                class="text-container w-28 lg:w-36 h-2.5 lg:h-6 pl-0.5 lg:pl-3.5 overflow-hidden text-[6px] lg:text-xl lg:font-medium">Read
                                More</span>
                        </div>
                        <!-- Spacer to push content to bottom -->
                        <div class="flex-grow"></div>
                        <!-- Bottom Sections: Stick to bottom -->
                        <div class="flex flex-col justify-end flex-grow">
                            <div class="text-container w-28 lg:w-96 h-12 lg:h-36 overflow-hidden lg:mb-9 mb-2.5">
                                <h2 class="text-[10px] lg:text-4xl lg:font-medium">{{ $image['quote'] }}</h2>
                            </div>
                            <div class="text-container w-11 lg:w-40 h-2 lg:h-6 overflow-hidden">
                                <h3 class="text-[5px] lg:text-xl lg:font-medium">{{ $image['date'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        window.onload = function () {
            const images = document.querySelectorAll('.image-container img');
            images.forEach((img, index) => {
            img.style.opacity = 0;
            setTimeout(() => {
                img.style.opacity = 1;
            }, index * 200);
            });

            const thirdImage = document.querySelectorAll('.image-container img')[2];
            if (thirdImage) {
            toggleExpand(thirdImage);
            }
        };

        function toggleExpand(clickedImg) {
            if (window.innerWidth >= 1024) { // lg: breakpoint
                toggleExpandLargeView(clickedImg);
            } else {
                toggleExpandMobileView(clickedImg);
            }
        }

        function toggleExpandLargeView(clickedImg) {
            const images = document.querySelectorAll('.image-container img');
            const expandedContents = document.querySelectorAll('.expanded-content');

            images.forEach((img, index) => {
                img.classList.remove('expanded', 'collapsed-small');
                img.classList.add('collapsed');

                if (index % 2 !== 0) {
                    img.classList.add('collapsed-small');
                }

                const content = expandedContents[index];
                if (content) {
                    content.classList.add('hidden');
                }
            });

            clickedImg.classList.add('expanded');
            clickedImg.classList.remove('collapsed', 'collapsed-small');

            const clickedImageId = clickedImg.dataset.imageId;
            const expandedContent = document.querySelector(`.expanded-content[data-image-id="${clickedImageId}"]`);
            if (expandedContent) {
                expandedContent.classList.remove('hidden');
            }
        }

        function toggleExpandMobileView(clickedImg) {
            const images = document.querySelectorAll('.image-container img');
            const expandedContents = document.querySelectorAll('.expanded-content');

            images.forEach((img, index) => {
                img.classList.remove('sm-expanded', 'sm-collapsed-small');
                img.classList.add('sm-collapsed');

                if (index % 2 !== 0) {
                    img.classList.add('sm-collapsed-small');
                }

                const content = expandedContents[index];
                if (content) {
                    content.classList.add('hidden');
                }
            });

            clickedImg.classList.add('sm-expanded');
            clickedImg.classList.remove('sm-collapsed', 'sm-collapsed-small');

            const clickedImageId = clickedImg.dataset.imageId;
            const expandedContent = document.querySelector(`.expanded-content[data-image-id="${clickedImageId}"]`);
            if (expandedContent) {
                expandedContent.classList.remove('hidden');
            }
        }
    </script>
</div>
@endsection