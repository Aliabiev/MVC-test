<?php
require_once 'models/book.php';
require_once 'models/user.php';

class MainController extends Controller{
	public function __construct(){
		//echo __METHOD__.'<br>';
	}
	public function index(){
		$title = 'Main page';
		$content = 'lorem'; 
		View::render('main/index', compact('title','content')); //compact- создает ассоциативный массив
	}
	public function books(){
		$bookModel = new Book();
		$books = $bookModel->page(0);
		View::render('books/all', compact('books'));
	}
	public function getNextPage(){
		$bookModel = new Book();
		$books = $bookModel->page($_POST['p']);
		//echo $_POST['p'];
		echo json_encode($books);
	}




}