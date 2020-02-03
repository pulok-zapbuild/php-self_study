<?php
    function linear_search($arr,$search)
    {   $mode=0;
        foreach ($arr as $x)
        {
            If($x==$search)
            {
                return 1;
            }
        }
        return 0;
        
    }
    function binary_search($arr,$search)
    {
        $start=0;
        $end=count($arr)-1;
        while($end>$start)
        {    
            $mid=($start+$end)/2;
            if($arr[$mid]==$search)
                return 1;
            if($arr[$mid]>$search)
                $end=$mid-1;
            else    
                $start=$mid+1;
        }
        return 0;
    }
    $arr=array("12","34","64","32","9");
    $search=32;
    if(linear_search($arr,$search))
        echo "item found";
    else
        echo "item missing";
    $arr2=array("1","12","33","34","54","67");
    if(binary_search($arr2,$search))
        echo "item found";
    else
        echo "item missing";
    
    


?>