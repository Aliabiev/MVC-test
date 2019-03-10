<?php
require_once 'models/reviews.php';

class ReviewsController extends Controller{
	public function __construct(){

	}
public function index(){
        $reviewsModel = new Reviews();
        $reviews = $reviewsModel->all();
        $title = 'Main page';
		$content = 'lorem'; 
		View::render('reviews/reviews', compact('reviews')); 
        }
public function reviews(){
	if($_POST){
        $name = $_POST['name'];
        $text = $_POST['text'];
        $id = $_SESSION['user_id'];
        $reviewsModel = new Reviews();
        $reviewsModel->addReview($name, $text, $id);   
        //Massage::set('success','Спасибо за отзыв');
        header('Location: /reviews'); 
        exit;
        
        /* else {
        Massage::set('danger','Зарегистрируйтесь, чтобы оставлять отзывы');
            header('Location: /user/register');
            exit;
        } */
      }
    }

}