<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactus(){
        return view('mail.contactus');
    }

    public function sendmail(Request $request){
       //dd($request->all());
       $username=$request->username;
       $email=$request->email;
       $content=$request->content;
       Mail::to($email)->send(new ContactMail($username,$email,$content));

        return back()->with('success', 'Email sent successfully!');
}
    }

