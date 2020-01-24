<?php
	class first
	{
		const x ="constant variable can't be change<br>";#constant defination
		static $y ="static variable<br>";#static variable defination
		public static function openr()#static func defination
		{
			echo "static method can be called without making a instance of class";
		}

	}


	#both constant and static variable can be used with the instance of the class 
	#this done by the scope resolution oprater

	#here the constant is invoked without the object of class
	echo first::x;

	#here the static variiable is invoked without the object of class
	echo first::$y;

	#the difference bw static and constant is that 
	# value of constant cant change but value of static can change

	#here we are accesssing and chainging value of static variable 
	first::$y="static can be change<br>";
	echo first::$y;

	#invoking the static method with object of class
	first::openr();
	
?>