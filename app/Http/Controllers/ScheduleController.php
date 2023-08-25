<?php

namespace App\Http\Controllers;

use App\Models\ScheduleTime;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    
    function daylist(){

        $fetch = ScheduleTime::all();


        return view('dashboardveiws.Setday.listday')->with('fetch',$fetch);
    }
    
    public function addday(){

        return view('dashboardveiws.Setday.addday');
    }

    // addday


    function daystore(Request $req){
       
        $req->validate([

            'day' => 'required |max:15'
    
        ]);
    
        $ins = new ScheduleTime;
        $ins-> Day = $req['day'];
    
        $ins ->save();
    
        return redirect('/dashboard');
    }
// addday


}

