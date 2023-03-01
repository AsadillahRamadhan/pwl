<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('products', [
            'judul' => 'Home Products',
            'products' => ['Popok', 'Meubel', 'Logam']
        ]);
    }

    function popok(){
        return view('products', [
            'judul' => 'Popok',
            'products' => ['Popok Bayi', 'Popok Remaja', 'Popok Lansia']
        ]);
    }

    function meubel(){
        return view('products', [
            'judul' => 'Meubel',
            'products' => ['Kursi', 'Meja', 'Kasur']
        ]);
    }

    function logam(){
        return view('products', [
            'judul' => 'Logam',
            'products' => ['Besi', 'Emas', 'Perak']
        ]);
    }
}

