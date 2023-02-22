<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index($program){
        echo "Program $program: ";
        echo "<ol><li>Menanam Padi</li><li>Membajak Sawah</li><li>Memandikan Kerbau</li></ol>";
    }
}
