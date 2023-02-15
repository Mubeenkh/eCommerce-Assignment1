<?php
namespace app\core;

class App
{
	//this entire function routes URL to a method call
	function __construct()
	{	

		//we wish to route the request to to the appropriate class/method (/controllers/method).
		//$request is an array containing two values 0.controller 1.method
		$request = $this->parseURL($_GET['url'] ?? '');

		//we create a the Default controller and method
		$controller = 'Main';
		$method = 'index';  	
		$params = [];			

		//Check if the requested controller is in our controllers folder?
		if(file_exists('app/controllers/' . $request[0] . '.php')) 
		{
			//we get the name of the controller
			$controller = $request[0];	

			//removed whatever value is set on $request[0], it's now empty;
			unset($request[0]); 		
		}
		
		//if controller is not defined, then its gonna be the default controller Main	
		$controller = 'app\\controllers\\' . $controller;  	
		$controller = new $controller; 		
		
		//Checks if the class controller (ex:"Main") exists and if the method (ex: "index") exists  
		if(isset($request[1]) && method_exists($controller, $request[1]))
		{
			$method = $request[1];
			unset($request[1]);
		}
		
		//array_values(input): reads an array, take the values from it, and create another array from it
		$params = array_values($request); 
		
		// Call the controller method with parameter
		call_user_func_array([$controller, $method], $params);
	}

	function parseURL($url)
	{
		//explode : Splits a string into an array of strings using a separator character, explode( separator, Your string)
		//trim(String, character you want to remove)

		return explode('/', trim($url,'/')); // takes the url /Main/index and returns an array with 2 values
	}
}