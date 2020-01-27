

<?php
class SquareRoot
{
    public function sqrt($arg)
    {
	$find_sqrt=$arg;
	$arr=array();
	$arr1=array();
	$k=$find_sqrt;
	$divisor=1;
	$o=$m=$decimal_count=0;
	

	while(intval($k)>0)
	{
		array_push($arr, $k%100);
		$k=$k/100;
	}
	#print_r($arr);

	$divident=array_pop($arr);
	while($o==0)
	{
		if($divident==$divisor*$divisor)
		{
			array_push($arr1, $divisor);
			$o=1;
		}
		elseif($divisor*$divisor>$divident)
		{
			$divisor=$divisor-1;
			array_push($arr1, $divisor);
			$o=1;
		}
		else
			$divisor=$divisor+1;
	}
	#print_r($arr1);
	$reminder=$divident-($divisor*$divisor);
	$divisor=($divisor+$divisor)*10;
	#echo "<br> reminder is ".$reminder."<br>";
	#divisor and reminder aa rha h
	while($decimal_count!=6)
	{
		
		$o=0;
		$l=1;
		if(count($arr)>0)
		{
			$divident=array_pop($arr);
			$divident=$divident+$reminder*100;
		}
		else
		{
			$divident=$reminder*100;
			$decimal_count=$decimal_count+1;
			if($m==0)
			{
				array_push($arr1,".");
				$m=1;
			}
			/*if(count($arr==0))
				array_push($arr1,"0");*/
		}
		while($o==0)
		{
			if($divident==($divisor+$l)*$l)
			{
				array_push($arr1, $l);
				$o=1;
			}
			elseif($l>9)
			{
				$l=$l-1;
				array_push($arr1, $l);;
				$o=1;
			}
			elseif(($divisor+$l)*$l>$divident)
			{
				$l=$l-1;
				array_push($arr1, $l);;
				$o=1;
			}
			else
				$l=$l+1;


		}
		#$reminder=$divident-
		#echo "divisor is ".$divisor."<br>";
		#echo $l."<br>";
		$reminder=$divident-(($divisor+$l)*$l);
		$divisor=($divisor+2*$l)*10;
		#echo "new divisor is ".$divisor."<br>";
		
		#echo "reminder is ".$reminder."<br>";
	}

	#print_r($arr1);
    return implode("",$arr1);
    }
}	
?>