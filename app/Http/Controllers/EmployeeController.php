<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;

class EmployeeController extends Controller
{
    public function index(Request $req)
    {
        $employe = new Employe();

        $employe->name = $req->input('name');

        if($req->hasfile('image')){
            $file = $req ->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/employe', $filename);
            $employe->image = $filename;
        
        } else {
            return $req ; 
            $employe->image = '';
        }
            $employe->save();
        }


        function  imgfeatch(){
            $data=Employe::all();
            return view('Employeform',["data"=>$data]);
        }

    }

