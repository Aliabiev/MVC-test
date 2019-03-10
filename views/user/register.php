<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/jquery.Jcrop.css" type="text/css" />
</head>


<main>

  <?php if (Massage::has()):  ?>
  <div class="alert alert-<?= Massage::getType()?>" role="alert">
    <? echo Massage::getText()?>
  </div>
<?php endif ?>
	<div class="row">
	<div class="col-3"> 
<form action="/user/register" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</main>