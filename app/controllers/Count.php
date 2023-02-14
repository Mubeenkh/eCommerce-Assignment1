<?php
namespace app\controller;

class Count extends \app\core\Controller{

	function index()
	{
		//  Make a new Counter model object
		$counter = new \app\models\Counter(); 

		// Call increment on the Counter object
		$counter->increment();

 		// Call write the Counter object
		$counter->write();
		
 		//Echo the Counter object
		echo $counter;
	}
}