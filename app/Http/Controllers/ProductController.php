<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        echo "Daftar Kategori: ";
        echo "<ul>
              <li><a href='category/popok'>Popok</a></li>
              <li><a href='category/meubel'>Meubel</a></li>
              <li><a href='category/logam'>Logam</a></li>
              </ul>";
    }

    function popok(){
        echo "Daftar Popok: ";
        echo "<ul>
              <li>Popok Bayi</li>
              <li>Popok Balita</li>
              <li>Popok Lansia</li>
              </ul>";
    }

    function meubel(){
        echo "Daftar Meubel: ";
        echo "<ul>
              <li>Kursi</li>
              <li>Meja</li>
              <li>Kasur</li>
              </ul>";
    }

    function logam(){
        echo "Daftar Logam: ";
        echo "<ul>
              <li>Aluminium</li>
              <li>Besi</li>
              <li>Galium</li>
              </ul>";
    }


}
