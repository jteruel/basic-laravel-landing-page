@extends('layouts.app')

@section('content')

<div class="container"> 
  <div class="row"> 
   <div id="pagefull"> 
    <div class="row"> 
           <div class="col-md-2">
             
            </div>
            <div class="col-md-8">
               <div class="panel panel-default">
                <div class="panel-heading"><h4>Contact Form</h4></div>
                <div class="panel-body">  
               @if (Session::has('message'))
                <li style="color:#000; padding:15px; border:1px solid #000; list-style:none;">{!! session('message') !!}</li>
                <br/> 
               @endif 
               {!! Form::open(array('action' => 'MainController@sendcontact')) !!}
                 <label>Your Name</label>
                 <input type="text" name="name" class="form-control">
                 <br/> 
                 <label>Your Email Address</label>
                 <input type="email" name="email" class="form-control">
                 <br/> 
                 <label>Phone</label>
                 <input type="text" name="phone"  class="form-control">
                 <br/>
                 <label>Subject</label>
                 <input type="text" name="subject"  class="form-control">
                 <br/> 

                 {!! Form::label('message', null) !!}
                 <br/>
                 <textarea name="message" id="message" class="form-control"></textarea>
               
                 <br/> 
                 {{ Form::submit('Send',['class' => 'btn btn-primary']) }}
                {!! Form::close() !!} 

                  </div>
                 </div>
                </div>  
            
        </div>
     </div> 

    </div> 
  </div> 
</div> 

@endsection