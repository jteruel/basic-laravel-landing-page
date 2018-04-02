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
        <h1>Craft Future Career Development Experience</h1>

        <h3>Building Individuals for the Careers of the Future</h3>
        <br/> 
        <center><a href="/interest" class="btn btn-primary" style="padding:20px; padding-left:40px; padding-right:40px; ">Learn More</a></center>
      </div>
   </div>
 </div> 
  
</div> 

@endsection
