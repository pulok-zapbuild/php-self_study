<?php
$first = $_POST['first'];
$second = $_POST['second'];
$op = $_POST["op"];
echo "<center>";
if(empty($first))
	echo "first number can't be empty";
else
{
echo $op."<br>";
if($op=="&#8730")
{
	echo sqrt($first);
}

echo "result is ";
switch ($op) {
	case '+':
		echo $first+$second;# code...
		break;
	case '-':
		echo $first-$second;# code...
		break;
	case '*':
		echo $first*$second;# code...
		break;
	case '/':
		echo $first/$second;# code...
		break;
	case '&#8730':
		echo "abc";
		$as=sqrt($first);
		echo $as;# code...
		break;
	default:
		# code...
		break;
	
}
}
echo "</center>";

?>
<br><br><br>
<center><a href="calculator.html">go to calculator</a></center>