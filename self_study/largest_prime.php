<?php
    function primeCheck($number)
    { 
        if ($number == 1) 
        return 0; 
        for ($i = 2; $i <= $number/2; $i++)
        { 
            if ($number % $i == 0) 
                return 0; 
        } 
        return 1; 
    } 
    $res=$num=999984;
    $num_start=$num/2;
    $count=0;
    while($count==0)
    {
        if($num%$num==0)
        {
         $count=primeCheck($num);   
        }
        if($count)
        {
            if($res%$num!=0)
                $count=0;
        }
        $num=$num-1;
    }
    echo $num+1;


?>