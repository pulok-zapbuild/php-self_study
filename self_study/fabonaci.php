<?php
    function NthFibonacci($n)
    {
        if($n <= 1) return 0;
        if($n == 2) return 1;

        $sum = NthFibonacci($n-1) + NthFibonacci($n-2);
        return $sum;
        
    }
    echo NthFibonacci(6);

?>