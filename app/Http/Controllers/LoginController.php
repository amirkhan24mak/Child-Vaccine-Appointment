<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    


    // public function slipdetail(){
    //     return view('slip');
    // }

    function slipdetails($id){
         
        $ss = DB::select("SELECT * from appointments INNER JOIN hospitals ON appointments.Hid = hospitals.Hid INNER JOIN patients ON appointments.Pid = patients.Pid INNER JOIN schedule_times ON appointments.Sid = schedule_times.Sid where Id = $id;");

        // $Slipdp =$Slipdp[0];
       return view("userdashboard.Appomint.slip",compact('ss'));
        
    
    }





    public function dashboard(){
        $count = Hospital::count();
        return view('userdash',compact('count'));
    }


    public function login(){
        return view('login');
    }
    public function action(Request $req){
        $req->validate([
        'lemail'=>'required',
        'passw'=>'required'
        ]);
        
        //user
        $sql = DB::select('SELECT * from `patients` where  `Pemail` =?  and `Ppassword`=? ',
        [$req->lemail,$req->passw]); 
        session()->put('email',$req->lemail);
        
        session()->put('pid',$sql[0]->Pid);
        if(session()->has('email')){
            return redirect('/userdashboard');
            

        }
        else{
            return redirect('/login');
        }
        //user
        
        
    }

    public function logout(){
        session()->forget('email');
        return redirect('/');
    }               
    public function d_del($id){
        $del = Appointment::find($id);
        $del->delete();
        return redirect('userdashboard/Appomint/list');
    }
    




}
?>