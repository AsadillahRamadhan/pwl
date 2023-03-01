<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
       return view('about', [
        'whatsapp' => '12345',
        'instagram' => '123_45',
        'facebook' => 'I2EAS'
       ]);
    }
}
