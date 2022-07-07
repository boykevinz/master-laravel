<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UsermenuController extends Controller
{
    public function tampiluser()
    {
        //a
        $tpuser = DB::table('users')->get();
        //b
        return view('userpage', ['userpage' => $tpuser]);
    }


    public function form_tambahuser()
    {
        return view ('form_user');
    }

    public function simpanuser(Request $Request)
    {
        DB::table('users')->insert([
            'id' => $Request->id,
            'name' => $Request->name,
            'level' => $Request->level,
            'email' => $Request->email,
            'password' => bcrypt($Request->password)

        ]);
        return redirect('/home/userpage');
    }    

    public function userdelete(Request $id)
    {
        //a
        DB::table('users')->where('id', $id->id)->delete();
        //b
        return redirect('/home/userpage');
        }
        public function edituser($id)
        {
            //a
            $useredt = DB::table('users')->where('id', $id)->get();
            //b
            return view('edituser', ['barang' => $useredt]);
        }
        public function userupdate(Request $Request)
        {
            //a
            DB::table('users')->where('id', $Request->id)->update([
                'id' => $Request->id,
                'name' => $Request->name,
                'level' => $Request->level,
                'email' => $Request->email,
                'password' => bcrypt($Request->password)
            ]);
            //b
            return redirect('/home/userpage');
        }              


}
