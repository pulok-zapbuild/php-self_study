 <?php
	class first  #parent class
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
	class second extends first ##child class
	{
		function set($arg1)
		{
			$arg=$arg1;
			echo "setting variable of parent class ".$arg."<br>";
		}
	}

	#creating the object of child class
	$obj=new second();

	#invoking method of child class using object
	$obj->set('2020'); 

	#invoking the method of parent class using object of child class because
	#child class inherit the properties of parent class  
	$obj->set_var('6789');
	$obj->get_var();

?>