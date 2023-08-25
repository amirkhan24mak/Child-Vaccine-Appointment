<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Hospital;
use App\Models\ScheduleTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
   public function main()
   {
      return view('Index');
   }

   public function update()
   {
      $id = session()->get('hid');
      $select = Hospital::find($id);

      return view('hospitaldashboardveiws.Hospital.updatehospital', compact('select'));
   }
   public function hospitalupdate(Request $req, $id)
   {
      $select = Hospital::find($id);
      if ($select) {
         $img = $req->img;
         if ($img != null) {
            $img = $req['img'];
            $name = $img->getClientOriginalName();
            $name = Str::random(5) . '_' . $name;
            $img->move('allimages', $name);
         } else {
            $name = $req['oldimg'];
         }
         $select->Hname = $req->name;
         $select->Haddress = $req['address'];
         $select->email = $req->email;
         $select->Himg = $name;
         $select->save();
      }
      return redirect('/Hospitaldashobard/hostpital');
   }


   public function d_del($id)
   {
      $del = Appointment::find($id);
      $del->delete();
      return redirect('/dashobard/Appomint');
   }
   public function day_delete($id)
   {
      $del = ScheduleTime::find($id);
      $del->delete();
      return redirect('/dashboard/Setday');
   }

      


}
