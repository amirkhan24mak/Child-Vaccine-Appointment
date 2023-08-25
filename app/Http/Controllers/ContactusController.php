<?php

namespace App\Http\Controllers;

use App\Models\webcontact;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function list(){
        $email = webcontact::all();
        return view('dashboardveiws.Parents.email')->with('email',$email);
    }
    public function contactus(){
        return view('Contact');
    }

    // public function addhospital(){
    //     return view('Hospitalregister');
    // }

    function store(Request $req){
       
        $req->validate([

            'email' => 'required |max:30',
            'address' => 'required |max:80',
            'name' => 'required'
    
        ]);

        $ins = new webcontact;
        $ins-> Name = $req['name'];
        $ins-> Email =$req['email'];
        $ins-> massage =$req['address'];
    
        $ins ->save();
    
        return redirect('/');
    }


}
