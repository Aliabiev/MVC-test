<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">  


<?php

echo '<table border="1" class="books">';
echo '<tr><th>#</th><th>id</th><th>name</th><th>price</th><th>new</th><th>themes</th><th>category</th><th>Action</th>';
for ($i=0; $i < count($books); $i++) 
{ 
    $book = $books[$i];
    echo '<tr>';
    echo '<td>'. ($i+1).'</td>';
    echo '<td>'. $book->id.'</td>';
    echo '<td>'. $book->name.'</td>';
    echo '<td>'. round($book->price,2).'</td>';
    if($book->new ==1) {echo '<td><span style="font-size: 15px; color: blue;"><i class="fas fa-check"></i></span></td>';} else {echo '<td><span style="font-size: 15px; color: gray;"><i class="fas fa-check"></i></span></td>';}

    echo '<td>'. $book->themes.'</td>'; 
    echo '<td>'. $book->category.'</td>';
    echo '<td>
    <form action="index.php" method="POST">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" value="'.$book->id .'">
    <button>
            <a class="btn">
            <span style="font-size: 15px; color: Dodgerblue;">
            <i class="fas fa-trash-alt"></i>
            </a>
    </button>
            <a class="btn" href="editbook.php?id='.$book->id.'">
            <span style="font-size: 15px; color: Dodgerblue;">
            <i class="fas fa-cog"></i>
            </a>
            </span>
            </form>
         </td>';
    echo '<tr>';
}

echo '</table>';






