<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        return view('profile', [
            'nama' => 'Muhammad Asadillah Ramadhan',
            'kelas' => 'TI-2A',
            'absen' => '22',
            'nim' => '2141720093'
        ]);
    }
}
