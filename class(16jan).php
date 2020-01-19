<?php
	class first
	{
		public $var; #public variable

		public function set_var($arg) #func to set the var 
		{
			$this->var=$arg;  
		}
		public function  get_var()  #func to get the var
		{
			echo "variable is : ".$this->var;
		}
	}

	#defining the object of class first
	$obj=new first();  

	#calling the function"set_var()" to set the variable"$var" of class"$first" with the help of object"$obj" 
	$obj->set_var('first_value');  

	#calling the function"get_var()" to get the value of variable"$var" of class"$first" with the help of object"$obj"
	$obj->get_var();
?>