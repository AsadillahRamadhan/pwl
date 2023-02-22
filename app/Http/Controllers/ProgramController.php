<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index(){
        echo "Daftar Program: ";
        echo "<ul>
              <li><a href='program/sawah'>Sawah</a></li>
              <li><a href='program/perkebunan'>Perkebunan</a></li>
              <li><a href='program/perkantoran'>Perkantoran</a></li>
              </ul>";
    }

    function sawah(){
        echo "Kegiatan:";
        echo "<ul>
              <li>Mencangkul</li>
              <li>Membajak</li>
              <li>Menanam</li>
              </ul>";
    }

    function perkebunan(){
        echo "Kegiatan:";
        echo "<ul>
              <li>Memetik</li>
              <li>Memupuk</li>
              <li>Menanam</li>
              </ul>";
    }

    function perkantoran(){
        echo "Kegiatan:";
        echo "<ul>
              <li>Mengetik</li>
              <li>Menulis</li>
              <li>Melapor</li>
              </ul>";
    }
}
