<?php
class Router{
	public static function Start(){
		session_start();
		$url = isset($_GET['url'])?$_GET['url']:'main';
		/*
        user/login userController login()
        user       userController index()
        /          mainController index()
		*/
		$url = explode('/', $url);
        $fileController = 'controllers/'.$url[0].'Controller.php';
		if(file_exists($fileController))
		{
        require_once $fileController;
        $controllerName = $url[0].'Controller';
        $controller = new $controllerName();
		$actionMethod = isset($url[1])?$url[1]:'index';
		if(method_exists($controller, $actionMethod))
		$controller->$actionMethod();
	else 
		echo  ' Page not found!';
        
        
		}
        else {
        	echo ' File not found!';
        }

	}
}