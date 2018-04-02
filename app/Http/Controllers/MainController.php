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

    public function contact() 
    { 
       return view('contact');
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

       if($data['phone']) { 
         $sendcontact['phone'] = $data['phone']; 
       } else { 
         $sendcontact['phone'] = 'phone'; 
       }
   
       Mail::send('emails.Contact', $sendcontact, function ($message)
       {   
           $message->from('info@kaizenhire','KaizenHire');
           $message->to('info@flightsinasia.com');
           $message->subject('New Message From KaizenHire Site');
       });
        
       \Session::flash('message', 'Message successfully sent!');
       return redirect('/contact');
    }
}

