<?php
require_once 'models/user.php';

class UserController extends Controller{
	public function __construct(){
		//echo __METHOD__.'<br>';
	}
	public function index(){
        $userModel = new User();
        $users = $userModel->all();
		$title = 'Main page';
		$content = 'lorem'; 
		View::render('user/allusers', compact('title','users')); 
	}
	public function register(){

		if($_POST){
         $email = $_POST['email'];
         $pass = $_POST['pass'];
        //echo $email;
         $userModel = new User();
         if($userModel->checkEmail($email))
         {
         	Massage::set('danger','пользователь с таким email существует');
         	header('Location: /user/register');
         	exit;
         }
         else{
         	$userModel->addUser($email, $pass);
        	Massage::set('success','Спасибо за регистрацию');
        	 
         	header('Location: /user/login'); 
         	exit;
         }
        
		}


		$title = 'Регистрация';
		$content = 'lorem'; 
		View::render('user/register', compact('title','content')); 
	}
    
    public function delete(){
     if($_POST){
    $id = $_POST['id'];
    $userModel = new User();
    $user = $userModel->deleteUser($id);
    //View::render('user');
    header('Location: /user'); 
            exit;
    }
}

	public function login(){
         if($_POST){
         $email = $_POST['email'];
         $pass = $_POST['pass'];
         $userModel = new User();
         $user = $userModel->checkUser($email, $pass);
         if(!$user)
         {
         Massage::set('danger','не верный логин или пароль');
         	header('Location: /user/login');
         	exit;
         }
         else {
         	Session::set('user_id', $user->id);
         	header('Location: /');
         	exit;
           	
         }
     }
       
         

		$title = 'Вход';
		$content = 'lorem'; 
		View::render('user/login', compact('title','content')); 
	}
	
public function exit(){
session::delete('user_id');
header('Location: /');
            exit;
}

}
