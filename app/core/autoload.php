<?php 
//spl_autoload_register: it's going to  accept a function as a parameter.
spl_autoload_register(

	function($class_name)
	{
		require_once($class_name . '.php');
	}
);
