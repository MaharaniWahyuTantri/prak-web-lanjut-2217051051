<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = ""){
        $data = [
            'nama' => 'Maharani Wahyu Tantri',
            'kelas' => 'A',
            'npm' => '2217051051'
        ];
        return view('profile', $data);
    }
}
