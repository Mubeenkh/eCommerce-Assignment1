<?php 
namespace app\controllers;
//name of this controller is Main,we wanna make sure Main calls the view class
// which is why we extends Controller
class Main extends \app\core\Controller{ 
	
	function index(){
		$this->view('/Main/index');
	}
	function about_us()
 	{
 		$this->view('/Main/about_us');
 	}

}