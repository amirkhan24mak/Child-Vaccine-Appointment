<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class HostpitalController extends Controller
{
    //main
    public function hos(){

        $app = Appointment::where('appstatus','0')->count();
        $hcoun = Hospital::count();
        $ap = Appointment::where('appstatus','1')->count();
        $pa = Patient::count();

        
        return view('dhome',compact('app','hcoun','ap','pa'));
    }

    //add hostpital view
    public function add(){
        return view('dashboardveiws.Hospital.add_host');
    }
    public function list(){

        $fetch = Hospital::all();


        return view('dashboardveiws.Hospital.list_host')->with('fetch',$fetch);
    }
    // website hospital register page

    public function addhospital(){
        return view('Hospitalregister');
    }

    function hospitalformstore(Request $req){
       
        $req->validate([

            'pname' => 'required |max:30',
            'paddress' => 'required |max:80',
            'cimg' => 'required | image |mimes:png,jpg',
            'pemail' => 'required | email',
            'ppass' => 'required',
            'cpass' => 'required | same:ppass'
    
        ]);
    
        $img = $req['cimg'];
        $name = $img->getClientOriginalName();
        $name = Str::random(8). '_' . $name;
        $img ->move('allimages',$name);
    
        $ins = new Hospital;
        $ins-> Hname = $req['pname'];
        $ins-> Haddress =$req['paddress'];
        $ins-> email =$req['pemail'];
        $ins-> password =$req['ppass'];
        $ins-> Himg =$name;
    
        $ins ->save();
    
        return redirect('/');

    }

    // website hospital register page









}
