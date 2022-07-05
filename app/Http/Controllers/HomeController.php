<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
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
            'jumlah' => $Request->jumlah
            
        ]);
        return redirect('/home');
    }

    public function edit($id)
    {
        //a
        $barangs = DB::table('barang')->where('id', $id)->get();
        //b
        return view('edit', ['barang' => $barangs]);
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

    public function hapus($id)
    {
        //a
        DB::table('barang')->where('id', $id)->delete();
        //b
        return redirect('/home');

    }

}
