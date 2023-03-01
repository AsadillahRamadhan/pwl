<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index(){
        return view('programs', [
            'judul' => 'List Program',
            'list' => ['Sawah', 'Perkebunan', 'Perkantoran']
        ]);
    }

    function sawah(){
        return view('programs', [
            'judul' => 'List Program Sawah',
            'list' => ['Mencangkul', 'Membajak', 'Menanam']
        ]);
    }

    function perkebunan(){
        return view('programs', [
            'judul' => 'List Program Perkebunan',
            'list' => ['Memetik', 'Memupuk', 'Menanam']
        ]);
    }

    function perkantoran(){
        return view('programs', [
            'judul' => 'List Program Perkantoran',
            'list' => ['Mengetik', 'Membaca', 'Menulis']
        ]);
    }
}
