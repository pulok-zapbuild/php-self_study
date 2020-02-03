<?php
	#include the php file which contain the class
	#in which function are defined
	require_once "chess.php";
	#creating a object of class chess
	$obj = new chess();
	#defining the size of chess
	$size_chess=8;

	for ($i=0;$i<$size_chess;$i++)
	{
		for($j=0;$j<$size_chess;$j++)
		{
			if($i%2==0)
			{
				if($j%2==0)
					$obj->black();#function is called to print black part
				else
					$obj->white();#function is called to print white part
			}
			else
			{
				if($j%2==0)
					$obj->white();#function is called to print white part
				else
					$obj->black();#function is called to print black part
			}
		}
		echo "<br>";#use to change the line before the increment of i index
	}

?>