<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function tampilbarang()
    {
        //a
        $brg = DB::table('barang')->get();
        //b
        return view('barang', ['barang' => $brg]);
    }

    public function tambahbarang()
    {
        return view ('form_barang');
    }

    public function simpan(Request $Request)
    {
        DB::table('barang')->insert([
            'id' => $Request->id,
            'nama_brg' => $Request->nama_brg,
            'deskripsi' => $Request->deskripsi,
            'harga' => $Request->harga,
            'jumlah' => $Request->jumlah,

        ]);
        return redirect('/home');
    }

    public function edit($id)
    {
        //a
        $barang = DB::table('barang')->where('id', $id)->get();
        //b
        return view('edit', ['barang' => $barang]);
    }

    public function update(Request $Request)
    {
        //a
        DB::table('barang')->where('id', $Request->id)->update([
            'id' => $Request->id,
            'nama_brg' => $Request->nama_brg,
            'deskripsi' => $Request->deskripsi,
            'harga' => $Request->harga,
            'jumlah' => $Request->jumlah
        ]);
        //b
        return redirect('/home');
    }

    public function hapus(Request $id)
    {
        //a
        DB::table('barang')->where('id', $id->id)->delete();
        //b
        return redirect('/home');
        }

    
    public function halamanlogin()
    {
        return view('login.index'); 
    }

    public function postlogin(Request $Request)
    {
        if(Auth::attempt($Request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/home/login');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home/login');
    }

}
