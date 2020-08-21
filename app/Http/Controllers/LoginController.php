<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Illuminate\Support\Facades\DB;
use Crypt;

class LoginController extends Controller
{
  //login and signup controller

function signupCont(request $req)
{
    $Tdata= new Login;

    // $Tdata->Id=$req->input('');
    $Tdata->Name=$req->input('Name');
    $Tdata->PhoneNo=$req->input('PhoneNo');
    $Tdata->Email=$req->input('Email');
    $Tdata->Password=Crypt::encrypt($req->input('Password'));
    
    $Tdata->save();

    $req->Session()->put('Tdata','your details submited succesfully');
    return redirect('login');
    
}

function LoginpCont(request $req)
{
    // return $req->input();
   $data = Login::where('Email',$req->input('Email'))->get();
    // return $data[0]->Password;

  if( crypt::decrypt ($data[0]->Password) == $req->input('Password'));
  {
    $req->Session()->put('data','your details submited succesfully');
    return redirect('godwin');
  }
  // else
  // {
  //   echo "please enter correct password";
  // }
  

}

//forgot password

function fpassword(request $req){
// $data = Login::all();
  
$data = Login::where('Email',$req->input('Email'))->get();
  
  if( ($data[0]->Email) == $req->input('Email') && ($data[0]->PhoneNo) == $req->input('PhoneNo') ){
    
     if($req->input('Password') == $req->input('Re-Password') ){
         print_r ('password are same');
         $Id=$data[0]->Id;
         print_r ($Id);
  
         $affected = DB::table('Logins')
                         ->where('Id',  $NewId=$Id)
                         ->update(['Password' => Crypt::encrypt($req->input('Password'))
                          // 'LastName'       =>$req ->  input('LastName')
                           
                    ]);         
                         
             
    }
    else{
          print_r ('password are not same');
         // return redirect()->back()->with(['error'=>'password are not ']);
        }

    } 
    else {
          print_r ('user not found');
         // return redirect()->back()->with(['error'=>'email not exists']);
         }

}
}



    


