<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Auth::routes();

Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){

    Route::get('/home', [App\Http\Controllers\HobbyController::class, 'index'])->name('home');
    Route::get('/', [DashboardController::class, 'index']);

Route::prefix('product')->group(function(){
    Route::get('/popok', [ProductController::class, 'popok']);
    Route::get('/meubel', [ProductController::class, 'meubel']);
    Route::get('/logam', [ProductController::class, 'logam']);
    Route::get('/', [ProductController::class, 'index']);

});

Route::get('/about-us', [AboutController::class, 'index']);

Route::pattern('id', '[0-9]+');

Route::get('/articles/{id}', [ArticleController::class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/popok', [ProductController::class, 'popok']);
    Route::get('/meubel', [ProductController::class, 'meubel']);
    Route::get('/logam', [ProductController::class, 'logam']);
    Route::get('/', [ProductController::class, 'index']);

});

Route::get('/category/{category_name}', [ProductController::class, 'index']);

Route::get('
e}', [NewsController::class, 'index']);

Route::prefix('program')->group(function(){
    Route::get('/sawah', [ProgramController::class, 'sawah']);
    Route::get('/perkebunan', [ProgramController::class, 'perkebunan']);
    Route::get('/perkantoran', [ProgramController::class, 'perkantoran']);
    Route::get('/', [ProgramController::class, 'index']);

});

Route::resource('/contact-us', ContactController::class);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/pengalaman-kuliah', [PengalamanController::class, 'index']);

Route::get('/artikel', [ArtikelController::class, 'index']);

Route::get('/hobi', [HobbyController::class, 'index']);
Route::get('/keluarga', [FamilyController::class, 'index']);
Route::get('/matkul', [MatkulController::class, 'index']);
Route::resource('/mahasiswa', MahasiswaController::class);
});
