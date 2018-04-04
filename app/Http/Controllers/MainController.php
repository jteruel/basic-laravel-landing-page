<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail; 

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    } 

    public function sendcontact(Request $request)
    {
      $data = $request->all();

      $sendcontact['name'] = $data['name'];
      $sendcontact['email'] = $data['email'];
      $sendcontact['text'] = $data['message'];

      if($data['subject']) {
        $sendcontact['subject'] = $data['subject']; 
      } else {
        $sendcontact['subject'] = 'No Subject';
      }

      Mail::send('emails.Contact', $sendcontact, function ($message)
        { 
          $message->from(['youremailhere'],['yournamehere']);
          $message->to(['recipientemail']);
          $message->subject('Your message subject here');
        });
        
      \Session::flash('message', 'Message successfully sent!');
      return redirect('/');
    }

    public function interested()
    {
      return view('interested');
    }

    public function signup(Request $request)
    {
      $data = $request->all(); 
      
      $signup['firstname'] = $data['firstname'];
      $signup['lastname'] = $data['lastname'];
      $signup['hometown'] = $data['hometown'];
      $signup['email'] = $data['email'];  

      Mail::send('emails.NewSignUp', $signup, function ($message)
      {   
        $message->from(['youremailhere'],['yournamehere']);
        $message->to(['recipientemail']);
        $message->subject('Your message subject here');
      });
        
      return redirect('/thank-you');
    }

    public function thankyou()
    {
      return view('thanks');
    }
}

