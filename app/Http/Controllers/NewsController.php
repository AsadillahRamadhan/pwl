<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index($news){
        return view('news', [
            'judul' => $news
        ]);
    }
}

