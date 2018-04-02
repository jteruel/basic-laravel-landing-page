@extends('layouts.app')

@section('content')

<div id="topspacing"></div>

<div class="container"> 
  <div class="row"> 
   <div id="pagefull"> 
    <div class="row"> 
           <div class="col-md-2">
             
            </div>
            <div class="col-md-8">
               <div class="panel panel-default">
                <div class="panel-heading"><h3>Sign Up For Updates</h3></div>
                <div class="panel-body">  

                  <center> <p>We're not ready for launch yet. We'll update you as soon as we're ready to launch!</p></center>
                  
                  <br/> 
                  <center><h4><a href="/">Go back</a></h4></center>
                  <hr>
              
               {!! Form::open(array('action' => 'MainController@signup')) !!}
                 <label>Your First Name</label>
                 <input type="text" name="firstname" class="form-control">
                 <br/> 
                 <label>Your Last Name</label>
                 <input type="text" name="lastname" class="form-control">
                 <br/> 
                 <label>Your Hometown</label>
                 <input type="text" name="hometown" class="form-control">
                 <br/> 
                 <label>Your Email Address</label>
                 <input type="email" name="email" class="form-control">
                 <br/>  
                 {{ Form::submit('Go',['class' => 'btn btn-primary']) }}
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