<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DashHospitalAppoinment;
use App\Http\Controllers\DashHospitalProfile;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalLoginController;
use App\Http\Controllers\ParentsRegissterController;
use App\Http\Controllers\SAppoinmentController;
use App\Http\Controllers\HostpitalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserdashboardController;
use App\Models\Appointment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'main']);


Route::get('/services', function () {
    return view('Services');
});

Route::get('/contact', function () {
    return view('Contact');
});



//website contact
Route::get('/contact',[ContactusController::class,"contactus"]);
Route::post('/contact/store',[ContactusController::class ,"store"]);
Route::get('/dashboard/email',[ContactusController::class ,"list"]);
//website contact

// Parenst Register
Route::get('/dashboard/Parents',[ParentsRegissterController::class,'Padminlist']);
Route::get('/register',[ParentsRegissterController::class ,"addparants"]);
Route::post('/register/parentsformstore',[ParentsRegissterController::class ,"parentsformstore"]);

// Parenst Register


// Hospital Register
Route::get('/dashboard',[HostpitalController::class,'hos'])->middleware('adminlogin');
Route::post('/approved',[SAppoinmentController::class,'approved']);

Route::get('/Hospitaldashobard/hostpital',[DashHospitalProfile::class,'hos'])->middleware('hospitalliogin');
Route::get('/Hospitaldashobard/hostpital/list',[DashHospitalProfile::class,'list'])->middleware('hospitalliogin');
Route::get('/Hospitaldashobard/hostpital/Profile_Update',[HomeController::class ,"update"])->middleware('hospitalliogin');
Route::post('/update_hostpital/{id}',[HomeController::class,"hospitalupdate"]);
Route::post('/approved2',[DashHospitalProfile::class,'approved2']);

Route::get('/dashobard/hostpital',[HostpitalController::class,'list'])->middleware('adminlogin');
Route::get('/dashobard/hostpital/add',[HostpitalController::class,'add'])->middleware('adminlogin');
Route::post('/Hospitalregister/hospitalformstore',[HostpitalController::class ,"hospitalformstore"]);
Route::get('/Hospitalregister',[HostpitalController::class ,"addhospital"]);
Route::get('/Hospitaldashobard/hostpital/Appoinmentlist',[DashHospitalProfile::class,'list'])->middleware('hospitalliogin');
Route::get('/Appoinmentlist/edit/{id}',[DashHospitalProfile::class,'edite'])->middleware('hospitalliogin');
Route::post('/appointment/action/{id}',[DashHospitalProfile::class,'editaction'])->middleware('hospitalliogin');

// Hospital Register







//Route for Dashboards

//main page


// Appointment

Route::get('/dashobard/Appomint',[SAppoinmentController::class,'list'])->middleware('adminlogin');
Route::get('/appointments/delete/{id}',[SAppoinmentController::class,'d_del']);
Route::post('/register/appoinmentstore',[SAppoinmentController::class ,"Appoinmentstore"]);
Route::get('/SetAppoinment',[SAppoinmentController::class,'set'])->middleware('oppointment') ;
Route::post('/appoint/action',[SAppoinmentController::class,'a_action']);

// Appointment


// Schedule day

Route::get('/dashboard/Setday',[ScheduleController::class,'daylist'])->middleware('adminlogin');
Route::get('/dashboard/Setday/addday',[ScheduleController::class,'addday'])->middleware('adminlogin');
Route::post('/dashboard/Setday/daystore',[ScheduleController::class ,"daystore"]);

// Schedule day
// Logout

Route::get('/logout',[LoginController::class,'logout']);
Route::get('/logoutadmin',[AdminLoginController::class,'logout']);
Route::get('/logouthospital',[HospitalLoginController::class,'hoslogout']);

// Logout



// route for userdashboard

Route::get('/userdashboard/Appomint/list',[UserdashboardController::class,'list'])->middleware('oppointment');
Route::get('/userdashboard/Child/Profile',[DashHospitalAppoinment::class,'update'])->middleware('oppointment');
Route::post('/update_Parents/{id}',[DashHospitalAppoinment::class,"parentsupdate"]);
Route::get('/userdashboard',[LoginController::class,'dashboard'])->middleware('oppointment');

// route for userdashboard





//route for login

Route::post('/register/parentsformstore',[ParentsRegissterController::class ,"parentsformstore"]);;
Route::get('/login',[LoginController::class,'login']);
Route::post('/login/action',[LoginController::class,'action']);
Route::get('/loginhospital',[HospitalLoginController::class,'loginhospital']);
Route::post('/loginhospital/action',[HospitalLoginController::class,'action']);
Route::get('/admin',[AdminLoginController::class,'adminlogin']);
Route::post('/adminstore',[AdminLoginController::class,'adminstore']);

//route for login


//route for update opointment

Route::get('/slipdetail/{id}',[LoginController::class,'slipdetails']);
Route::get('/appointment/delete/{id}',[LoginController::class,'d_del']);
Route::get('/appointment/delete2/{id}',[DashHospitalAppoinment::class,'d_del']);
Route::get('/appointment/deleteadmin/{id}',[HomeController::class,'d_del']);
Route::get('/appointment/deleteadmin/{id}',[HomeController::class,'day_delete']);

//route for update opointment
