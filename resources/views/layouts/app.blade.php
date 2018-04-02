<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{% static 'img/favicon.ico'  %}" />
<!--META TAGS-->
<meta property="og:url" content="<?php echo url()->current(); ?>" />
<title>KaizenHire</title>

<!--end meta tags--> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.js"></script> 
<!--end summernote--> 

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<!-- Bootstrap Core CSS -->
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{{ asset('/css/general.css') }}}"> 
</head>  
<body> 

@extends('layouts.header') 

@yield('content') 

@extends('layouts.footer')