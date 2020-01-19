<?php
	class abc
	{
		const ABC ="i'm a constant";
		function abcd()
		{
			echo "i'm a function";
		}
	}


	#scope resolution operator is use to call variable without the object
	echo abc::ABC."<br>";

	#scope resolution operator is use to call function without object
	abc::abcd(); 


?>