<?php

namespace app\models;
define('Log_File', 'resources/messages.txt')

class Messages{

	public $name;
	public $email;
	public $IP;

	function read()
	{
		$content = file(Log_File);
		return $content;
	}

	function write()
	{
		$message = json_encode($this);

		$fh = fopen(Log_File, 'w'); //open file for writing only
		flock($fh, LOCK_EX);
		fwrite($fh, "$message\n");
		fclose($fh);

	}
}