<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class demoController extends Controller
{
    public function demouser(){
        
        $data = ['name'=>"akash",'data'=>"Hello akash"];
        $user['to']='akashsali1999@gmail.com';
        Mail::send('mail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject("hello dev");
        });
        return view("mail");
    }
}
