<?php
namespace app\core;

class App
{
	//this entire function routed URL to a method call
	function __construct()
	{	

		$request = $this->parseURL($_GET['url'] ?? '');

		//we create a the Default controller and method
		$controller = 'Main';
		$method = 'index';  	//default methods of each controller
		$params = [];			

		if(file_exists('app/controllers/' . $request[0] . '.php')) 
		{

			$controller = $request[0];	//sets variable to the 
			unset($request[0]); 		//removed whatever value is set on $request[0]

		}

		$controller = 'app\\controllers\\' . $controller;  
			
		$controller = new $controller; 						
		
		
		if(isset($request[1]) && method_exists($controller, $request[1]))
		{
			$method = $request[1];
			unset($request[1]);
		}
		
		$params = array_values($request);   
		call_user_func_array([$controller, $method], $params);
	}

	function parseURL($url)
	{
		// http://localhost/Contact/index

		return explode('/', trim($url,'/'));
	}
}