<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
  
});


//login and signup route
Route::view('login','Login');
Route::post('loginupdata','LoginController@LoginpCont');

Route::view('signup','Signup');
Route::post('signupdata','LoginController@signupCont');

//forgot pasword
Route::view('forgot_password','Forgot');
Route::post('fpassword','LoginController@fpassword');

//logout route
Route::get('logout', function () {
    Session()->forget('Tdata');
    return redirect('login');
});


//middleware session
Route::group(['middleware'=>'mylogin'],function(){

    Route::get('Layout','Layout');

Route::view('godwin','Home');
Route::get('student-details','GodwinController@studentdet');
Route::view('student-registration','Student-registration');
Route::post('registration','RegController@submit');
Route::get('delete/{Id}','GodwinController@delete');
Route::get('edit/{Id}','GodwinController@edit');
Route::post('edit/edit','GodwinController@update');

});


//mail route
Route::get('Mail','MailController@indexmail');

//image
Route::View('employe','Employe');
Route::post('/employe','EmployeeController@index');

//Route::View('featch','Employeform');
Route::get('Employeform','EmployeeController@imgfeatch');