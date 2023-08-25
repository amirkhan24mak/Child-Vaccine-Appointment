<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ParentsRegissterController extends Controller
{

    // for admin list dashboard
    function Padminlist(){

        $fetch = Patient::all();


        return view('dashboardveiws.Parents.Registerlist')->with('fetch',$fetch);
    }
    // for admin list dashboard

    
    public function addparants(){
        return view('register');
    }




     function parentsformstore(Request $req){
       
        $req->validate([

            'name' => 'required |max:30',
            'phoneno' => 'required |max:11',
            'gender' => 'required',
            'age' => 'required',
            'cimg' => 'required | image |mimes:png,jpg',
            'pemail' => 'required | email',
            'ppass' => 'required',
            'cpass' => 'required | same:ppass'
    
        ]);
    
        $img = $req['cimg'];
        $name = $img->getClientOriginalName();
        $name = Str::random(8). '_' . $name;
        $img ->move('allimages',$name);
    
        $ins = new Patient;
        $ins-> Pname = $req['name'];
        $ins-> Pphone =$req['phoneno'];
        $ins-> Paddress =$req['address'];
        $ins-> Pgender =$req['gender'];
        $ins-> Page =$req['age'];
        $ins-> Pemail =$req['pemail'];
        $ins-> Ppassword =$req['ppass'];
        $ins-> Pimag =$name;
    
        $ins ->save();
    
        return redirect('/');



    }

}
