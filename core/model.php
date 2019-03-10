<?php
class Model{
	protected $pdo;
	public function __construct(){
		$this->pdo = new PDO ('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASS);
}
	public function all(){
		$q = 'SELECT * FROM '.$this->table;
		return $this->pdo->query($q)->fetchAll(PDO::FETCH_OBJ);	
	}
    
    public function page($p){
		$q = 'SELECT * FROM '.$this->table.' LIMIT '.($p*50).', 50';
		return $this->pdo->query($q)->fetchAll(PDO::FETCH_OBJ);	
	}


}