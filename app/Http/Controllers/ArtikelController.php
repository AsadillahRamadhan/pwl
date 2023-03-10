<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    //

    function index(){
        return view('artikel', [
            'artikels' => DB::table('artikels')->paginate(10)
        ]);
    }
}
