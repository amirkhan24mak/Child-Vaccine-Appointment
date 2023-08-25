<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class HospitalLoginController extends Controller
{
    
    public function loginhospital(){
        return view('hospitallogin');
    }
    public function action(Request $req){
        $req->validate([
        'lemail'=>'required',
        'passw'=>'required'
        ]);
        
        //hospital
        $sql = DB::select('SELECT * from `hospitals` where  `email` =?  and `password`=? ',
        [ $req->lemail,$req->passw]); 
        session()->put('hospitalemail',$req->lemail);
        
        session()->put('hid',$sql[0]->Hid);
        if(session()->has('hospitalemail')){
            return redirect('/Hospitaldashobard/hostpital');
            

        }
        else{
            return redirect('/loginhospital');
        }
        
    }
    
    public function hoslogout(){
        session()->forget('hospitalemail');
        return redirect('/');
    }               
    


    

}
