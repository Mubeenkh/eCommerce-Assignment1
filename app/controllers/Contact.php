<?php 
namespace app\controllers;

class Contact extends \app\core\Controller{ 
	
 	public function index()
 	{
 		if(isset($_POST['send']))
 		{
 			//create the message object
 			$message = new \app\models\Messages(); 

 			//place the input values into the message properties
 			$message->email = $_POST['email'];
 			$message->message = $_POST['message'];
 			$message->IP = $_SERVER['REMOTE_ADDR'];

			//call the write funtion
 			$message->write();  

 			//redirect towards the read page
 			header('location:/Contact/read'); 

 		}else{
 			$this->view('/Contact/index');
 		}
 	}

 	public function read()
 	{	
 		$message = new \app\models\Messages();
 		$content = $message->read();
 		
 		$this->view('Contact/read', $content); 		
 	}

 	// public function create()
 	// {
 	// 	if(isset($_POST['send']))
 	// 	{
 	// 		$message = new \app\models\Messages(); //create the message object

 	// 		//place the input values into the message properties
 	// 		$message->email = $_POST['email'];
 	// 		$message->message = $_POST['message'];
 	// 		$message->IP = $_SERVER['REMOTE_ADDR'];

 	// 		$message->write(); //call the write funtion 

 	// 		header('location:/Contact/read'); //redirect towards the read page

 	// 	}else{
 	// 		$this->view('/Contact/index');
 	// 	}

 	// }
}