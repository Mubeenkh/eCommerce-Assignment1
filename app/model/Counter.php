<?php
namespace app\model;
define('LOG_FILE', '/resource/counter.txt')

class Counter{

	$count = 0;	//property

	function __construct(){

		if(file_exists(LOG_FILE)){
		
			$fp = fopen('counter.txt', 'r');	//r because we only want to read from it
			flock($fp, LOCK_SH);
			$count = fread($fp, filesize(LOG_FILE));
			fclose($fp);
		
		}else{

			//Set the $count variable to '{"count":0}';
			$count = {"count":0}; 

		}

		// Decode the JSON in $count and copy the resulting object’s count property to this object’s count property.
		$this->count = json_decode($count);  //??????????????????????????????

	}

	function increment(){
		// The increment method adds 1 to this object’s count property.
		
	}

	function write(){

	}

	function __toString(){

	}

}