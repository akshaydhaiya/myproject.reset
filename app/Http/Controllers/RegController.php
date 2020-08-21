<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class RegController extends Controller
{
     public function submit(Request $req){

        

        $Tdata= new Student;

        // $Tdata->Id=$req->input('');
        $Tdata->Name=$req->input('Name');
        $Tdata->LastName=$req->input('LastName');
        $Tdata->Email=$req->input('Email');
        $Tdata->Address=$req->input('Address');
        $Tdata->City=$req->input('City');
        $Tdata->State=$req->input('State');
        $Tdata->Pincode=$req->input('Pincode');

        if($req->hasfile('image')){
            $file = $req ->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/images', $filename);
            $Tdata->image = $filename;
        
        } 
        // else {
        //     return $req ; 
        //     $Tdata->image = '';
        // }
        

        $Tdata->save();

        $req->Session()->flash('status','Student details submited succesfully');
        return redirect('student-details');
    }




}
