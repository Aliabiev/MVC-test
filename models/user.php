<?php
class User extends Model{

protected $table = 'users';

public function addUser($email, $pass){
	$pass = md5($pass);
    $pz = $this->pdo->prepare('INSERT INTO '.$this->table.'(email, password) VALUES(?,?) ');
    $pz->execute([$email, $pass]);
    //return $this->pdo->lastInsertId();
}

public function checkUser($email, $pass){
	$pass = md5($pass);
	$pz = $this->pdo->prepare('SELECT * FROM '.$this->table.' WHERE email=? AND password=?');
	$pz->execute([$email, $pass]);
	return $pz->fetch(PDO::FETCH_OBJ);
}

public function checkEmail($email){
	$pz = $this->pdo->prepare('SELECT COUNT(*) AS "count" FROM '.$this->table.' WHERE email=?');
	$pz->execute([$email]);
	return $pz->fetch(PDO::FETCH_OBJ)->count;
}

public function deleteUser($id){
	$pz = $this->pdo->prepare('DELETE FROM '.$this->table.' WHERE id=?');
	$pz->execute([$id]);

}

}