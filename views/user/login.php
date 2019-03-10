<main>
	<?php if (Massage::has()):  ?>
  <div class="alert alert-<?= Massage::getType()?>" role="alert">
    <? echo Massage::getText()?>
  </div>
<?php endif ?>
<form action="/user/login" method="POST">
	<div class="row">
	<div class="col-3"> 
<div class="form-group">
  <label for="usr">Логин:</label>
  <input type="text" class="form-control" id="usr" name="email">
</div>
<div class="form-group">
  <label for="pwd">Пароль:</label>
  <input type="password" class="form-control" id="pwd" name="pass">
   <button type="submit" class="btn btn-primary">Submit</button>
</div>

</div>
</div>
</form>
</main>