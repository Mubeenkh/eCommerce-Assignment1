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

 	public function create()
 	{
 		if(isset($_POST['send']))
 		{
 			$message = new \app\models\Messages(); //create the message object

 			//place the input values into the message properties
 			$message->email = $_POST['email'];
 			$message->message = $_POST['message'];
 			$message->IP = $_SERVER['REMOTE_ADDR'];

 			$message->write(); //call the write funtion 

 			header('location:/Contact/read'); //redirect towards the read page

 		}else{
 			$this->view('/Contact/index');
 		}

 	}
}