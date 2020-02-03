<?php
	
	namespace name1;  #creating a namespace "name1"
	function func_name()
	{
		echo "function of first namespace<br>";
	}
	class abc
	{
		static function a()  #static function
		{
			
			echo "inside class";
		}
	}

	
	namespace name2;  #creating another namespace "name2"
	function func_name()
	{
		echo "function of second namespace";
	}


	#calling the function of namespace "name1" which has same name 
	#without any error or conflict
	\name1\func_name();

	#calling the function of second namespace "name2"
	\name2\func_name();

	#caling a static function from inside a class in a namespace "name1"
	\name1\abc::a();
?>