<?php
function __autoload($var)#function defined
    {
        require_once $var.".php";
    }

#here we are getting the value form by post method
$first = $_POST['first'];
$second = $_POST['second'];
$op = $_POST["op"];

#craeting the object of class"calci" which calls the autoload function to load the Claci.php file
$obj=new Calci();

echo "<center>";
switch ($op) {
	case '+':
	#calling the add() function to perform the addition
		$r=$obj->add($first,$second);
		echo $r;
		break;
	case '-':
	#calling the sub() function to perform the subtraction
		$r=$obj->sub($first,$second);# code...
		echo $r;
		break;
	case '*':
	#calling the mul() function to perform the multiplication
		$r=$obj->mul($first,$second);# code...
		echo $r;
		break;
	case '/':
	#calling the div() function to perform the division
		$r=$obj->div($first,$second);# code...
		echo $r;
		break;
	case 'rt':
	#calling the root() function to perform the square root
		$obj->root($first,$second);
		break;
	default:
		 echo acb;# code...
		break;
	
}
?>
<br><br><br>
<center><a href="calculator.html">Go to Calculator</a></center>