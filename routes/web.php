<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get('/coba-routing', function () {
    return 'Ini adalah hasil percobaan routing';
});

Route::get('/halo', function () {
    return view('halo', [
        "name" => "Jong Koding"
    ]);
});

Route::resource('siswa', SiswaController::class);