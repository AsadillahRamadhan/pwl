<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/about-us', [AboutController::class, 'index']);

Route::pattern('id', '[0-9]+');

Route::get('/articles/{id}', [ArticleController::class, 'index']);

Route::get('/category/{category_name}', [ProductController::class, 'index']);

Route::get('/news/{news_name}', [NewsController::class, 'index']);

Route::get('/program/{program_name}', [ProgramController::class, 'index']);

Route::resource('/contact-us', ContactController::class);