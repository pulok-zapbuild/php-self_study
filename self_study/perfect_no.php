<?php
$num=100000;
for($i=1;$i<$num;$i++)
{   
    $p_n=0;
    for($j=1;$j<$i;$j++)
    {
        if($i%$j==0)
        {
            $p_n=$p_n+$j;
        }
    }
    if($i==$p_n)
        echo $i." ";
}



?>