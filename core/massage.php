<?php

abstract class Massage{
public static function set($type, $text){
Session::set('massage', compact('type', 'text'));
}
public static function has(){
	return isset($_SESSION['massage']);
}
public static function getType(){
	if(self::has()){
		return $_SESSION['massage']['type'];
	}
	return null;
}
public static function getText(){
	if(self::has()){
		$text = $_SESSION['massage']['text'];
		unset ($_SESSION['massage']);
		return $text;
	}
	return null;
}

}