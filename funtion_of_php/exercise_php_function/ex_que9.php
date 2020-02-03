<?php
    $count=0;
    $a = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $a_unique = array_unique($a);
    echo "average temp. is: ".array_sum($a_unique)/count($a_unique);
    asort($a_unique);
    #print_r($a_unique);
    echo "\nlowest five temp.: ".current($a_unique).",";
    while($count<4)
    {
        echo next($a_unique).",";
        $count=$count+1;
    }
    echo "\nhighest five temp.: ";
    echo end($a_unique).",";
    while($count>0)
    {
        echo prev($a_unique).",";
        $count=$count-1;
    }



?>