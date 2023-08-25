<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashHospitalProfile extends Controller
{


    public function edite($id){
        $data = Appointment::find($id);
        return view('hospitaldashboardveiws.Appomint.edit',compact('data'));
    }
    public function editaction(Request $req,$id){
        $req->validate([
            'status'=>'required',
            'result'=>'required',

        ]);
       $update = DB::update("UPDATE `appointments` set `Report`='$req->result',appstatus = $req->status ");
        return redirect('/Hospitaldashobard/hostpital/list');
        


    }
    
    //approve2

    public function approved(){
        $data = DB::update("UPDATE  `appointments` set `Status` = 1; ");

        return redirect('/Hospitaldashobard/hostpital/list');
        
    }
    //approve2
    
    public function hos(){
        $pend = Appointment::where('appstatus','0')->count();
        $compe = Appointment::where('appstatus','1')->count();
    return view('hopitaldash',compact('compe','pend'));
    }

    public function list(){
        $assa = DB::select("SELECT * from appointments INNER JOIN hospitals ON 
        appointments.Hid = hospitals.Hid INNER JOIN patients ON appointments.Pid = patients.Pid INNER JOIN 
        schedule_times ON appointments.Sid = schedule_times.Sid where hospitals.Hid = ?",[session()->get('hid')]);
        // $assa = Appointment::all();

        return view('hospitaldashboardveiws.Appomint.appomintlist')->with('assa',$assa) ;
    }

    


}
