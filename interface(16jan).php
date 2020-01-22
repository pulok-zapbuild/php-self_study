<?php
	interface any #craeting a interface
	{
		public function abc();
		public function abcd();
	}
	class first implements any #class that implement the interface
	{
		public function abc() 
		{
			echo "abc() func of interface in class first<br>";
		}
		public function abcd()
			{
				echo "abcd() func of interface in class first<br>";
			}

	}
	class second implements any#another class that implements the interface
	{
		public function abc()
		{
			echo "abc() again used in class second<br>";
		}
		public function abcd()
		{
			echo "abcd() again used in class second<br>";
		}
	}

	#creating the object of classs first
	$obj = new first();
	#calling the func of that class
	$obj->abc();
	$obj->abcd();

	#creating the object of class second 
	$obj1= new second();
	#calling the func of this class
	$obj1->abc();
	$obj1->abcd();
	
	
?>