<?php
    
    function merge($arr,$start,$end)
    {   
        $mid=0;
        $mid=intval(($start+$end)/2);
        if($end>$start)
        {
            merge($arr,$start,$mid);
            echo $arr[$mid]." ";
            merge($arr,$mid+1,$end);
            echo "\n";
        }
        else
            echo $arr[$mid]."\n";
    }
    $arr=array(61,6,161,66,15,16);
    $start=0;
    $end=count($arr)-1;
    merge($arr,$start,$end);

?>