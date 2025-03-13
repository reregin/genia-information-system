<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function showSelengkapnya()
    {

        $kepalaDosen = [
            'nama' => 'Mner Arie',
            'jabatan' => 'Kepala Lab',
            'pathFoto' => asset('images/main-foto.png'),
        ];

        $dataDosen = [
            [
                'nama' => 'Mner Arie',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/main-foto.png'),
            ],
            [
                'nama' => 'Mner Arie',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/main-foto.png'),
            ],
            [
                'nama' => 'Mner Arie',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/main-foto.png'),
            ],
            [
                'nama' => 'Mner Arie',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/main-foto.png'),
            ],
        ];

        $dataAsisten = [
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
            [
                'nama' => 'Satria Amu',
                'jabatan' => 'Kepala Lab',
                'pathFoto' => asset('images/satriaamux.png'),
                'linkTwitter' => 'https://x.com',
                'linkFacebook' => 'https://facebook.com',
                'linkInstagram' => 'https://instagram.com'
            ],
        ];

        return view('selengkapnya', [
            'kepalaDosen' => $kepalaDosen,
            'dataDosen' => $dataDosen,
            'dataAsisten' => $dataAsisten
        ]);
    }
}
