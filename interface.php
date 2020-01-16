<?php
	interface any
	{
		public function abc();
		public function abcd();
	}
	class first implements any
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
	class second implements any
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
	$obj = new first();
	$obj->abc();
	$obj->abcd();
	$obj1= new second();
	$obj1->abc();
	$obj1->abcd();
	
	
?>