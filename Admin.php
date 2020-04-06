<?php

include "User.php";
include "Customer.php";

class Admin extends User implements Customer{

	public function job1()
	{
		echo "Job method 01<br>";
	}

	public function job2()
	{
		echo "Job method 02<br>";
	}
	public function purchase()
	{
		echo "Purchase method";
	}
}



?>