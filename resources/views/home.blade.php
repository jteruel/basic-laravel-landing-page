@extends('layouts.app')

@section('content')

<div style="height:50px;"></div>

<div id="header">
<style>
  #header { background:linear-gradient(
      rgba(0, 0, 0, 0.1), 
      rgba(0, 0, 0, 0.5)
    ),url('img/work.jpg'); background-position: center center;
    background-color: rgba(0,0,0,0.3);
    background-repeat: no-repeat;  
    background-size: cover; height:500px;  
   } 
   #header h1 { font-weight:bold; }
   #header h3 { font-weight:bold; color:#fff;}
   #header #welcomemessage { padding-top:150px; }
</style>	
  <!--navigation links here. does it convert to click dropdown?-->  
 <!--end navigation bar; start header content--> 
 <div class="container">
   <div class="row">
      <div id="welcomemessage">
        <h1>Welcome to the Landing Page!</h1>

        <h3>Your intro subtext here</h3>
        <br/> 
        <center><a href="/interest" class="btn btn-primary" style="padding:20px; padding-left:40px; padding-right:40px; ">Link to Signup</a></center>
      </div>
   </div>
 </div> 
  
</div> 

<!--contact form-->
<div id="valueprop" class="spacing"> 
<div class="container">
  <div class="row">
    <div class="col-md-4">
        <h1><span class="glyphicon glyphicon-user"></span></h1>
        <h3>Simple, Easy to Use</h3>
    </div>
    <div class="col-md-4">
        <h1><span class="glyphicon glyphicon-plus"></span></h1>
        <h3>Quick Deployment</h3>
    </div>

    <div class="col-md-4">
        <h1><span class="glyphicon glyphicon-globe"></span></h1>
        <h3>Bring Your Landing Page to Life!</h3>
    </div>

  </div>
</div>
</div>

<!--contact form-->
<div id="contactform" class="spacing">
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1" style="border:1px solid #ededed;">
      <h3>Contact</h3>
      <hr>
      <div class="row">

        
           @if (Session::has('message'))
            <li style="color:#000; padding:15px; border:1px solid #000; list-style:none;">{!! session('message') !!}</li>
            <br/> 
           @endif 
           {!! Form::open(array('action' => 'MainController@sendcontact')) !!}
            <div class="col-md-4">
               <label>Your Name</label>
               <input type="text" name="name" class="form-control">
               <br/> 
               <label>Your Email Address</label>
               <input type="email" name="email" class="form-control">
               <br/> 
               
               <label>Subject</label>
               <input type="textarea" name="subject"  class="form-control">
               <br/> 
             </div>

             <div class="col-md-8">
                {!! Form::label('message', null) !!}
                 <br/>
                 <textarea name="message" id="message" class="form-control"  style="height:200px; "></textarea>
                 <br/> 
                 {{ Form::submit('Send',['class' => 'btn btn-primary']) }}
                 <br/> 
                 <br/> 

            </div>
            {!! Form::close() !!} 
      </div>
    </div>
  </div>
</div>
</div>



<!--end contact form--> 


@endsection
