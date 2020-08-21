<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Mail;

class MailController extends Controller
{
    function indexmail(){

            
        $data=array('name'=>'ankit','body'=>'text may like');
     
        Mail::send('Mail',$data,function($message){
            $message->to('codeonlinedikshant@gmail.com','code online')
                    ->subject('web testing mail subject');
        });
    }

}
