<?php

abstract class User{
	
	public $name;

	public function __construct()
	{
		// echo "Hi There!<br>";
	}
	public abstract function job1();
	public abstract function job2();

	public function greet()
	{
		echo "Welcome to OOP<br>";
	}

}

?>
