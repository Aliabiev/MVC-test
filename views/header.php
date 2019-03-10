<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
  <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.6.1.min.css?ver=4.6.1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">  
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
	 <header><div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../../index.php">MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/user">All Users </a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="/reviews">Reviews  </a>
      </li>

      <?php
      if (session::has('user_id')){
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="/user/exit" action="<?php //session::delete('user_id') ?>">EXIT </a>
      </li>     
      <?php
      }
      else {
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="/user/register">Register </a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="/user/login">Login </a>
      </li>  
      <?php } ?>
     

  </ul>
</div>
</nav>
</div></header>