<?php

namespace app\models;

define('Mes_File', 'messages.txt');

class Messages{
	
	public $email;
	public $message;  //public $name;
	public $IP;

	public function read()
	{
	    $content = file(Mes_File); //Reads entire file into an array
		return $content;
		//return file(Log_File); 
	}

	public function write()
	{
		$message = json_encode($this->message);

		$fh = fopen(Mes_File, 'w'); //open file for writing only
		flock($fh, LOCK_EX);
		fwrite($fh, "$this->message\n");
		fclose($fh);

	}
}