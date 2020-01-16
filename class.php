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
	$obj=new first();  #creating obj of class first
	$obj->set_var('first_value');  #calling func's
	$obj->get_var();
?>