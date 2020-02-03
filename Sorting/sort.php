<?php
    function selection_sort($arr)
    {
        for($i=0;$i<count($arr);$i++)
        {
            $pos=$i;
            for ($j=$i; $j<count($arr) ; $j++) 
            {   
                if($arr[$j]<$arr[$pos])
                {
                    $pos=$j;
                }
                
            }
            $temp=$arr[$i];
            $arr[$i]=$arr[$pos];
            $arr[$pos]=$temp;
                
        }
        return $arr;
    }
    function bubble_sort($arr)
    {
        for($i=0;$i<count($arr);$i++)
        {
            for($j=0;$j<count($arr)-1;$j++)
            {
                if($arr[$j]>$arr[$j+1])
                {
                    $arr[$j]=$arr[$j]+$arr[$j+1];
                    $arr[$j+1]=$arr[$j]-$arr[$j+1];
                    $arr[$j]=$arr[$j]-$arr[$j+1];
                }
            }
        }
        return $arr;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    }
    function insertion_sort($arr)
    {
        for($i=1;$i<count($arr);$i++)
        {
            $key=$arr[$i];
            $j=$i-1;
            while($j>=0 && $arr[$j]>$key)
            {
                $arr[$j+1]=$arr[$j];
                $j--;
            }
            $arr[$j+1]=$key;

        }
        return $arr;
    }
    $arr=array("12","34","64","32","9","68");
    print_r(selection_sort($arr));

?>