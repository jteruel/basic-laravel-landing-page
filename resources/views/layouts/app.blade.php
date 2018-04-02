<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{% static 'img/favicon.ico'  %}" />
<!--META TAGS-->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@kaizenhire" />
<meta property="og:url" content="<?php echo url()->current(); ?>" />
<title>KaizenHire</title>

<meta property="og:title" content="KaizenHire"/>
<meta property="twitter:title" content="KaizenHire" />
<meta property="description" content="Crafting the Future Career Development Experience"/> 
<meta property="og:description" content="Crafting the Future Career Development Experience"/>

<meta property="image" content="{{ asset('img/work.jpg') }}"/>
<meta property="og:image" content="{{ asset('img/work.jpg') }}"/>
<meta property="twitter:image" content="{{ asset('img/work.jpg') }}" />

<meta property="keywords" content="job search, career development, future tech, what should i learn, career advice"/>

<!--end meta tags--> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.js"></script> 
<!--end summernote--> 
<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Montserrat" rel="stylesheet"> 
<link rel="stylesheet" href="{{{ asset('/css/general.css') }}}"> 
</head>  
<body> 

@extends('layouts.header') 

@yield('content') 

@extends('layouts.footer')
