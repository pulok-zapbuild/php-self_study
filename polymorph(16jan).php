<?php
	class first
	{
		public function abc()
		{
			echo "class first";
		}

	}
	class second extends first
	{
		public function abc()
		{
			echo "class second<br>";

		}
	}
	class third extends second
	{
		public function abc()
		{
			echo "class third<br>";
		}
	}

	#creating a object of class third
	$obj = new third();
	#accessing the function"abc()" of class third
	$obj->abc();
	

	#creating a object of class third
	$obj = new second();
	#accesssing the function"abc()" of class second
	$obj->abc();
	

	#creating a object of class first
	$obj = new first();
	#accesssing the function"abc()" of class first
	$obj->abc();
	
?>