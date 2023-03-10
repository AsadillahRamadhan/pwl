<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use Illuminate\Support\Facades\DB;

class FamilyController extends Controller
{
    function index(){
        return view('family', [
            'families' => DB::table('families')->orderBy('tanggal_lahir')->get()
        ]);
    }
    
}
