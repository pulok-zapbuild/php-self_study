<?php
	class first
	{
		public $var;
		public $arg; #public variable

		public function set_var($arg) #func to set the var 
		{
			$this->var=$arg;  
		}
		public function  get_var()  #func to get the var
		{
			echo "variable is : ".$this->var."<br>";
		}
	}
	class second extends first
	{
		function set($arg1)
		{
			$arg=$arg1;
			echo "setting variable of parent class ".$arg."<br>";
		}
	}
	$obj=new second();
	$obj->set('2020'); #accessing the public variable through object of child class 
	$obj->set_var('6789');#accessing the public method through object of child class
	$obj->get_var();

?>