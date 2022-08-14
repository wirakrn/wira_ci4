<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | webprogram',
            'tes' => ['satuu', 'duaa', 'tigaa']
        ];

        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me',
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'JL.kutilang no 78',
                    'kota' => 'Stone City'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jl diponegoro no 78',
                    'kota' => 'batuu'
                ]
            ]
        ];

        return view('pages/contatc', $data);
    }
}
