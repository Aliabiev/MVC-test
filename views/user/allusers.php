<?php

echo '<table border="1">';
echo '<tr><th>#</th><th>id</th><th>name</th><th>email</th><th>password</th><th>time</th><th>Reviews</th><th>Action</th>';
for ($i=0; $i < count($users); $i++) 
{ 
	$user = $users[$i];
	echo '<tr>';
	echo '<td>'. ($i+1).'</td>';
	echo '<td>'. $user->id.'</td>';
	echo '<td>'. $user->name.'</td>';
	echo '<td>'. $user->email.'</td>';
	echo '<td>'. $user->password.'</td>';
	echo '<td>'. $user->time.'</td>';
	echo '<td>'. $user->rev.'</td>';
	echo '<td>
	<form action="/user/delete" method="POST">
	<input type="hidden" name="action" value="delete">
	<input type="hidden" name="id" value="'.$user->id .'">
	<button>
	        <a class="btn">
	        <span style="font-size: 10px; color: Dodgerblue;">
	        <i class="fas fa-trash-alt"></i>
	        </a>
	</button>
	     </form>
	     </td>';

	echo '<tr>';
	 //var_dump($_POST) ;
}

echo '</table>';
?>


