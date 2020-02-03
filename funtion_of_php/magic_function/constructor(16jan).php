<?php
	class first
	{
		public $var;
		public $arg; #public variable

		function __destruct()
		{
			echo "every thing is done";
		}
		function __construct($new) #constructor with argument
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

	#creating the object of class"first"
	$obj=new first('6999'); 

	#as _construct() invoke itself at the time of creation of the object so it just called 
	#and we also give the value of argument in the object creation "6999"

	#calling the funtion set_var()
	$obj->set_var('first_value'); 
	#calling the function get_var()
	$obj->get_var();

	#as in the end of script object destroys
	#and at the time of destrction of the object _destruct() invoked 

	
?>