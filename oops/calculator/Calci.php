<?php

class Calci
{
	function __construct()
	{
		echo "<center><b>Result is : </b></center>";
	}
	
	public function add($first_number,$second_number)#to add two variable
	{
		return $first_number+$second_number;# code...
	}
	public function sub($first_number,$second_number)#to subtract two variable
	{
		return $first_number-$second_number;
	}
	public function mul($first_number,$second_number)#to multiply two variable
	{
		return $first_number*$second_number;
	}
	public function div($first_number,$second_number)#to perform the division
	{
		return $first_number/$second_number;
	}
	public function root($first_number,$second_number)#to find the root of a variable
	{
		echo "<center>".sqrt($first_number)."{first_number}<br>";
		echo sqrt($second_number)."{second_number}</center>";
	}

}

?>