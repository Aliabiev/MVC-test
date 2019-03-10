<h2 class="text-centr">Отзывы</h2>

<div class="col-4">

<?php //if (Massage::has()):  ?>
  <div class="alert alert-<? //= Massage::getType()?>" role="alert">
    <? //echo Massage::getText()?>

<form method="POST" action="/reviews/reviews">
    <div class="form-group">
    <label for="name">Имя: </label>
	<input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="mes">Отзыв: </label>
    <textarea name="text" id="text" class="form-control" row="5"></textarea>
    </div>

  <button class="btn btn-primary"> Отправить</button>
  <?php //print_r($_POST); ?>
</form>
<br><br>
<?php


for ($i=0; $i < count($reviews); $i++) 
{ 
  $review = $reviews[$i];
  echo '<tr>';
  echo '<td>'. $review->name.':  '.'</td>';
  echo '<td>'. $review->text.'</td>';
  echo '<tr>';
  echo '<br>';
}


?>
</div>
