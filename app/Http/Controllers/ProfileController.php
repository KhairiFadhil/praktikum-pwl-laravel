<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile($nama = '', $npm = '', $kelas = '')
    {
        $data = [
            'nama'  => $nama ?: 'Raid Fadhil Khairi',
            'npm'   => $npm ?: '2217051066',
            'kelas' => $kelas ?: 'C',
        ];

        return view('profile', $data);
    }
}
