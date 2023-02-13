<?php
namespace app\models;

define('Log_File', '/resources/counter.txt');

function Counter{

	public $count = 0;

	function __construct()
	{
		if(file_exists(Log_File))
		{
			$fh = fopen(Log_File, 'r'); // r for reading only

			flock($fh, LOCK_SH); //prevents people from changing the file when you are looking at it
			// LOCK_SH to acquire a shared lock (reader). ***
			// LOCK_EX to acquire an exclusive lock (writer).
			// LOCK_UN to release a lock (shared or exclusive).
			
			$count = fread($fh, filesize(Log_File));
			// fread() reads up to length bytes from the file pointer referenced
			
			fclose($fh);

		}else{
			$count = '{"count":0}';

			$this->count = json_decode($count); //basically turns it into an array
		}

	}

	function increment()
	{
		$count++;
	}

	function write()
	{
		$count = json_encode($this->$count); //turns the array into a json
		$fh = fopen(Log_File, 'w'); // w for Writing only
		flock($fh, LOCK_EX); // LOCK_EX to acquire an exclusive lock (writer).
		fwrite($fh, $count);
		fclose($fh);
	}

	function __toString()
	{
		return json_encode($this);
	}

}