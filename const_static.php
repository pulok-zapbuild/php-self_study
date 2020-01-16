<?php
	class first
	{
		const x ="constant variable can't be change<br>";
		static $y ="static variable<br>";
		public static function openr()
		{
			echo "static method can be called without making a instance of class";
		}

	}
	
	echo first::x;
	first::$y="static can be change<br>";
	echo first::$y;
	first::openr();
	
?>