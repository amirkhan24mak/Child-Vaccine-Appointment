<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminLoginController extends Controller
{
    // adminlogin

    public function adminlogin()
    {
        return view('dashboardveiws.login');
    }


    public function adminstore(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'upassword' => 'required'
        ]);

        //user
        $sql = DB::select(
            'SELECT * from `admin` where  `username` =?  and `password`=? ',
            [$req->username, $req->upassword]
        );
        session()->put('name', $req->username);

        session()->put('id', $sql[0]->id);
        if (session()->has('name')) {
            return redirect('/dashboard');
        } else {
            return redirect('/admin');
        }
    }
    public function logout(){
        session()->forget('name');
        return redirect('/admin');
    }       

    // adminlogin

}
