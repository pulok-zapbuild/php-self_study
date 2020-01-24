<?php
	class first
	{
		public $var; #public vriable
		protected $var1; #protected variable
		private $var2; #private variable

	}
	class second extends first
	{
		function pub_set($arg1) #fuction to access the public variable
		{
			$var=$arg1;#using public variable
			echo "setting  public variable variable of parent class ".$var."<br>";
		}
		function pro_set($arg1)  #function to access the protected variable 
		{
			$var1=$arg1;
			echo "setting  protected variable variable of parent class ".$var1."<br>";	
		}
		function pri_set($arg1)  #function to access the private variable
		{
			$var2=$arg1;
			echo "setting private variable variable of parent class ".$var2."<br>";	
		}
	}


	#creating a object"$obj" of class second which is the child of class first
	$obj=new second();


	#accessing the public variable directly using the object of class
	#below we are setting the value of variable "var"
	$obj->var = 2223;

	#printing the value of that variable using object
	echo "accesss to public variable is alowed and value is ".$obj->var."<br>";

	#accessing the public variable through the funtion"pub_set" of child class"second"
	$obj->pub_set('2020'); 

	#as we cant access the private and protected variable directly with object of class 
	#so we use function of that child class to access the variale of that class 

	#accessing the protected varible through object of child class using function"pro_set()"
	$obj->pro_set('6789'); 
	#accessing the private variable through object of child class using function"pri_set()"
	$obj->pri_set('2664'); 
	
?>