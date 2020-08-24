<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
// use App\DB;
use Illuminate\Support\Facades\DB;

class GodwinController extends Controller
{
    function index(){

        return view('godwin');
    }

    // function studentreg(){

    // return view('Student_Registration');
    // }


    function  studentdet(){
        $data=Student::all();
        return view('Student-details',["data"=>$data]);
    }

   function delete($Id)
   {
       //return $Id;
       
        //     $data =Student::find($Id);
        //   print_r ($data->delete()); die ;

          DB::table('Students')->where('id', '=', $Id)->delete();
           

   }


   function edit($Id)
   {
    // return Student::find($Id);
       //return $Id;
        $dataEdit=Student::find($Id);
       return view('Edit',['data'=>$dataEdit]);

   }

   function update(Request $req){

        
    //  $Tdata = Student::find($req->Id);

//     echo  $NewId=$req->input('Id');
// print_r($NewId);

// // $Tdata->Id=$req->input('');
// $Tdata->Name=$req->input('Name');
// $Tdata->LastName=$req->input('LastName');
// $Tdata->Email=$req->input('Email');
// $Tdata->Address=$req->input('Address');
// $Tdata->City=$req->input('City');
// $Tdata->State=$req->input('State');
// $Tdata->Pincode=$req->input('Pincode');

// $Tdata->save();


$affected = DB::table('Students')
->where('Id',  $NewId=$req->input('Id'))
              ->update(['Name' =>$req ->  input('Name'),
              'LastName'       =>$req ->  input('LastName'),
            //   'image'          =>$req ->  input('image'),
            //   if($req->hasfile('image')){
            //     $file = $req ->file('image');
            //     $extension = $file->getClientOriginalExtension();
            //     $filename = time() . '.' . $extension;
            //     $file->move('uploads/employe', $filename);
            //     $employe->image = $filename;
            //   }


              
              'Email'          =>$req ->  input('Email'),
              'Address'        =>$req ->  input('Address'),
              'City'           =>$req ->  input('City'),
              'State'          =>$req ->  input('State'),
              'Pincode'        =>$req ->  input('Pincode')
              ]);              
              
              return redirect('student-details');
}


}
