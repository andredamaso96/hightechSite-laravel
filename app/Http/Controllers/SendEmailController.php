<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendJob;

class SendEmailController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function send(Request $request){

    
        // $this->validate($request, [
        //     'message_name' => 'required',
        //     'message_email' => 'required|email',
        //     'message_subject' => 'required',
        //     'message' => 'required'
        // ]);
        $name = $request->message_name;

        $data = array(
            'message_name' => $request->message_name,
            'message_email' => $request->email,
            'message_subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('andredamaso96@gmail.com')->send(new SendMail($data));
        //return view('pages.check');
        return back()->with('success', 'Obrigado ' .$name);
    }

    public function appointment(Request $request){

    
        // $this->validate($request, [
        //     'message_name' => 'required',
        //     'message_email' => 'required|email',
        //     'message_subject' => 'required',
        //     'message' => 'required'
        // ]);
        $first_name = $request->first_name;

        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'file' => $request->file('file')
        );

        Mail::to('andredamaso96@gmail.com')->send(new SendJob($data));
        //return view('pages.check');
        return back()->with('success', 'Obrigado ' . $first_name);
    }
}
