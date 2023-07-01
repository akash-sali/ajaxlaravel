<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\SendEmailJob;
class SendmailController extends Controller
{
    public function sendEmail(Request $req){
        $form = $req->form;
        $to = $req->to;
        $subject = $req->subject;
        $compose = $req->compose;
        $details['from'] = $form;
        $details['to'] = $to;
        $details['subject'] = $subject;
        $details['compose'] = $compose;

        
        // dd($req->file('attachement'));
        dispatch(new SendEmailJob($details));
        dd("success");
    }
    public function mailForm(){
        return view('mail.mailForm');
    }
}
