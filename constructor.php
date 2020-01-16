<?php
	class first
	{
		public $var;
		public $arg; #public variable

		function __destruct()
		{
			echo "every thing is done";
		}
		function __construct($new)
		{
			echo "calling constructor with variable value ".$new.".....<br>";
		}

		public function set_var($arg) #func to set the var 
		{
			$this->var=$arg;  
		}
		public function  get_var()  #func to get the var
		{
			echo "variable is : ".$this->var."<br>";
		}
	}
	$obj=new first('6999');  #creating obj of class first
	$obj->set_var('first_value');  #calling func's
	$obj->get_var();
?>