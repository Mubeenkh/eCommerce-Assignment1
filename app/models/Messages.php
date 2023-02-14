<?php

namespace app\models;
define('Log_File', '/resources/messages.txt');

class Messages{

	public $message;  //public $name;
	public $email;
	public $IP;

	function read()
	{
		// $content = file(Log_File);
		// return $content;
		return file(Log_File);
	}

	function write()
	{
		$message = json_encode($this->message);

		$fh = fopen(Log_File, 'w'); //open file for writing only
		flock($fh, LOCK_EX);
		fwrite($fh, "$this->message\n");
		fclose($fh);

	}
}