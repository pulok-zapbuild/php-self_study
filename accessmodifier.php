<?php
	class first
	{
		public $var; #public vriable
		protected $var1; #protected variable
		private $var2; #private variable

	}
	class second extends first
	{
		function pub_set($arg1)
		{
			$var=$arg1;#using public variable
			echo "setting  public variable variable of parent class ".$var."<br>";
		}
		function pro_set($arg1)
		{
			$var1=$arg1;
			echo "setting  protected variable variable of parent class ".$var1."<br>";	
		}
		function pri_set($arg1)
		{
			$var2=$arg1;
			echo "setting private variable variable of parent class ".$var2."<br>";	
		}
	}
	$obj=new second();
	$obj->var = 2223;
	echo "accesss to public variable is alowed and value is ".$obj->var."<br>"; #direct access to public variable
	$obj->pub_set('2020'); #accessing the public variable through object of child class 
	$obj->pro_set('6789'); #accessing the protected varible through object of child class
	$obj->pri_set('2664'); #accessing the priivate variablr through object of child class
	
?>