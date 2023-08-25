<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DashHospitalAppoinment extends Controller
{
    public function hos(){
        return view('hopitaldash');
    }

    public function update(){
        $id = session()->get('pid');
        $select = Patient::find($id);
  
        return view('userdashboard.Child.updatechilde',compact('select'));
    }

    public function parentsupdate(Request $req , $id){
        $select = Patient::find($id);
        if($select){
           $img = $req->img;
           if($img !=null){
              $img = $req['img'];
              $name = $img->getClientOriginalName();
              $name = Str::random(5).'_'. $name;
              $img->move('allimages',$name);
           }
           else{
              $name = $req['oldimg'];
           }
           $select->Pname = $req->name;
           $select->Paddress = $req['address'];
           $select->Pemail = $req->email;
           $select->Pimag = $name;
           $select->save();

        }
        return redirect('/dashboard/Parents');
    }
    
    public function d_del($id){
        $del = Patient::find($id);
        $del->delete();
        return redirect('/dashboard/Parents');
    }
}
