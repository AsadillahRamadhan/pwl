<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
class MatkulController extends Controller
{
    function index(){
        return view('matkul', [
            'matkuls' => Matkul::all()
        ]);
    }
}
