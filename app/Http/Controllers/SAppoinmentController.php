<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\ScheduleTime;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class SAppoinmentController extends Controller
{
    //approve
    public function approved(){
        $data = DB::update("UPDATE  `hospitals` set `Status` = 1; ");

        return redirect('/dashobard/hostpital');
        
    }
    //approve

    
    public function set(Request $req){

        $hopital= Db::select('select * from hospitals where Hid = ?',[$req->electhospital]);
        $day = Db::select('select * from schedule_times where Sid = ?',[$req->day]);

        if($hopital){
            
            session()->put('hospital',$hopital[0]->Hid);
        }
        if($req->day){
            session()->put('day',$day[0]->Sid);            
        }
        $hos = Hospital::all();
        $time = ScheduleTime::all();
        return view('SAppoinment',compact('hos','time','hopital','day'));

    }
    
    // public function list(){
    //     $adminuser = Patient::all();
    //     return view('dashboardveiws.Appomint.appomintlist')->with('adminuser',$adminuser);
    // }
    function list(){
        
        $ss = DB::select("SELECT * from appointments INNER JOIN hospitals ON appointments.Hid = hospitals.Hid INNER JOIN patients ON appointments.Pid = patients.Pid INNER JOIN schedule_times ON appointments.Sid = schedule_times.Sid;");
       
        return view('dashboardveiws.Appomint.appomintlist',compact('ss'));
    }

    public function d_del($id){
        $del = Appointment::find($id);
        $del->delete();
        return redirect('dashboardveiws.Appomint.appomintlist');
    }


    function Appoinmentstore(Request $req){
       
        $req->validate([

            'electhospital' => 'required',
            'day' => 'required',
    
        ]);
        $id = session('Pid');
        $id = session('pid');

        $ins = DB::insert("INSERT into `appointments`(`Id`,`Hid`,`Pid`,`Sid`) values(null,$req->electhospital,$id,$req->day)");
        
    if($ins){
        return redirect('/');

    }
    else{
        return redirect('/login');

    }
    }
    public function a_action(Request $req){
        

        $appormentsql = Db::insert("INSERT INTO appointments(Hid, Pid, Sid) VALUES 
        (?,?,?)",[session()->get('hospital'),session()->get('pid'),session()->get('day')]);

        return redirect('/userdashboard/Appomint/list');

        
        
        // print_r($req->toArray());

        // $insert->
    }

}

?>