<?php

namespace app\models;

define('Messsage_File', 'resources/messages.txt');

class Messages{
	
	public $email;
	public $message;  //public $name;
	public $IP;

	public function read()
	{
	    $content = file(Messsage_File); //Reads entire file into an array
		return $content;
		//return file(Log_File); 
	}

	public function write()
	{
		
		$fh = fopen(Messsage_File, 'a'); //open file for writing only
		flock($fh, LOCK_EX);

		$message = json_encode($this);

		fwrite($fh, "$message\n");
		fclose($fh);

	}
}