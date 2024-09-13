<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama' => 'Maharani Wahyu Tantri',
            'kelas' => 'A',
            'npm' => '2217051051',
            'deskripsi' => 'MUDAH BANGET AWAS AJA LOE GA GUE TEMENIN!'
        ];
        return view('profile', $data);
    }
}
