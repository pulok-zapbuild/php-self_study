<?php


class Calci
{
	
	function add($a,$b)#to add two variable
	{
		echo $a+$b;# code...
	}
	function sub($a,$b)#to subtract two variable
	{
		echo $a-$b;
	}
	function mul($a,$b)#to multiply two variable
	{
		echo $a*$b;
	}
	function div($a,$b)#to perform the division
	{
		echo $a/$b;
	}
	function root($a)#to find the root of a variable
	{
		$b=sqrt($a);
		echo $b;
	}
}
#craeting the object of class"calci"
$obj=new Calci();

#here we are getting the value form by post method
$first = $_POST['first'];
$second = $_POST['second'];
$op = $_POST["op"];
$r="&#8730";
echo "<center>";

echo "result is ";
switch ($op) {
	case '+':
	#calling the add() function to perform the addition
		$obj->add($first,$second);
		break;
	case '-':
	#calling the sub() function to perform the subtraction
		$obj->sub($first,$second);# code...
		break;
	case '*':
	#calling the mul() function to perform the multiplication
		$obj->mul($first,$second);# code...
		break;
	case '/':
	#calling the div() function to perform the division
		$obj->div($first,$second);# code...
		break;
	case 'rt':
	#calling the root() function to perform the square root
		$obj->root($first);
		break;
	default:
		 echo acb;# code...
		break;
	
}

echo "</center>";

?>
<br><br><br>
<center><a href="calculator.html">go to calculator</a></center>