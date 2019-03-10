<?php
class Reviews extends Model{
protected $table = 'reviews';

public function addReview($name, $text, $id){
	$pz = $this->pdo->prepare('INSERT INTO '.$this->table.' (name, text, user_id) VALUES (?,?,?) ');
    $pz->execute([$name, $text, $id]);
    }
}