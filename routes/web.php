<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsermenuController;


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


//page home
Route::get('/home', [HomeController::class, 'tampilbarang'])->name('home');


//page login
Route::get('/home/login', [HomeController::class, 'halamanlogin'])->name('login');
Route::post('/home/postlogin', [HomeController::class, 'postlogin'])->name('postlogin');
Route::get('/home/logout', [HomeController::class, 'logout'])->name('logout');





//tambah,proses tambah
Route::get('/home/tambah', [HomeController::class, 'tambahbarang'])->name('pagetambahbarang');
Route::post('/home/simpan', [HomeController::class, 'simpan']);


//edit, proses edit barang
Route::get('/home/edit/{id}', [HomeController::class, 'edit']);
Route::post('home/update/{id}', [HomeController::class, 'update']);

//hapus, proses hapus barang
Route::get('/home/delete/{id}', [HomeController::class, 'hapus']);



//page tampil user
Route::get('/home/userpage', [UsermenuController::class, 'tampiluser'])->name('tampiluser');

//tambah proses tambah user
Route::get('/home/tambahuser', [UsermenuController  ::class, 'form_tambahuser'])->name('formtambahuser');
Route::post('/home/simpanuser', [UsermenuController  ::class, 'simpanuser'])->name('simpanuser');

//edit, proses edit user
Route::get('/home/edituser/{id}', [UsermenuController::class, 'edituser']);
Route::post('home/userupdate/{id}', [UsermenuController::class, 'userupdate']);


//hapus, proses hapus barang
Route::get('/home/userdelete/{id}', [UsermenuController::class, 'userdelete'])->name('userdelete');


//Route::get('/home', 'HomeController@index');
//Route::get('home/hapus/{id}', 'HomeController@hapus');
//Route::get('/login', [HomeController::class, 'hapus']);
//Route::post('/home/updade/{id}  ', [HomeController::class, 'update']);