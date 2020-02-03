<?php
	$arr=[1,2,88,42,99];
	foreach($arr as $x)
	{
		echo $x."\n";
		if($x==42)
			break;
    }// your code here
    $arr1=[1,0,1,1,0,1,0,0,1,1,0,0,0,1,1,0,1,0,0,1,0,0,1,0,0];
    $arr2=[1,0,0,1,0,0];
    
    for($i=0;$i<count($arr1)-count($arr2);$i++)
    {
        $count=0;
        for($j=0;$j<count($arr2);$j++)
        {
            if($arr2[$j]!=$arr1[$j+$i])
            {
                $count=1;
                break;
            }
        }
        if($count==0)
            break;
    }
    if($count)
        echo "0";
    else    
        echo "1";
?>