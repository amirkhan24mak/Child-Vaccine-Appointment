<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserdashboardController extends Controller
{
    //for view
    function list(){
        
        $app = DB::select("SELECT * from appointments INNER JOIN hospitals ON
        appointments.Hid = hospitals.Hid INNER JOIN patients ON
        appointments.Pid = patients.Pid INNER JOIN schedule_times ON
        appointments.Sid = schedule_times.Sid where patients.Pid = ?",[session()->get('pid')]);
       
        return view('userdashboard.Appomint.appomintlist',compact('app'));
    }

    // function update(){
    //     return view('userdashboard.Child.updatechilde');
    // }

    //for view

}
