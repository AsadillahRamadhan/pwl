<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index($category_name){
        echo "Daftar Kategori Dengan Nama $category_name";
        echo "<ul>
              <li>List 1</li>
              <li>List 2</li>
              <li>List 3</li>
              </ul>";
    }
}
