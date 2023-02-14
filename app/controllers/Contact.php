<?php 
namespace app\controllers;

class Contact extends \app\core\Controller{ 
	
 	public function index()
 	{
 		$this->view('Contact/index');
 	}

 	public function read()
 	{
 		$this->view('Contact/read');
 	}

 	public function send()
 	{
 		if(isset($_POST['action']))
 		{
 			$messages = new \app\models\Messages();

 			$messages->email = $_POST['email'];
 			$messages->message = $_POST['message'];
 			$messages->IP = $_SERVER['REMOTE_ADDR'];

 			$messages->write();
 			header('location:/Main/about_us');

 		}else{
 			$this->view('Main/about_us');
 		}

 	}
}