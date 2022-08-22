<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ImportirController;
use App\Http\Controllers\AuthenticateController;


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

Route::get('/', function () {
    return view('home', [
        'title' => 'Omni Exim'
    ]);
});

Route::get('/cek/kontak', function () {
    return view('administrator/importir/importir', [
        'title' => 'Omni Exim',
        'is_active' => 'adm'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

//Administrator Route
//Login
Route::get('/admin', [AuthenticateController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [AuthenticateController::class, 'authenticate']);
Route::post('/logout', [AuthenticateController::class, 'logout']);
//Dashboard
Route::get('/administrator', function () {
    return view('administrator.dashboard', [
        'title' => 'Dashboard',
        'jumlah_importir' => '1000',
        'impenambahan' => '200',
        'jumlah_permintaan' => '15000',
        'iqpenambahan' => '1500',
        'is_active' => 'adm'
    ]);
})->middleware('admin');
//Articles
Route::resource('/administrator/artikel/', ArticleController::class)->middleware('admin');
//Inquiries
Route::get('/administrator/permintaan', [InquiryController::class, 'index'])->middleware('admin');
//Importirs
Route::get('/administrator/importir', [ImportirController::class, 'index'])->middleware('admin');
