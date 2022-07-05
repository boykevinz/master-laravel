<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

//Route::get('/home', 'HomeController@index');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/tambah', [HomeController::class, 'tambahbarang']);
Route::post('/home/simpan', [HomeController::class, 'simpan']);
Route::get('/home/edit{id}', [HomeController::class, 'edit']);
Route::post('/home/updade', [HomeController::class, 'update']);
Route::get('/home/hapus{id}', [HomeController::class, 'hapus']);


