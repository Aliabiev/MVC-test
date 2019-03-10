<?php
class View{
	static public function render($path, $data=[]){
	 extract($data);
	 unset($data);
	 ?>

    <?require 'views/header.php'; ?> 
     <main><div><?require 'views/'.$path.'.php'; ?></div></main>
     <footer><div><?require 'views/footer.php'; ?> </div></footer>
<?
	}
}

?>