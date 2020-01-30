<?php
    $decimal=128;
    $dec=1;
    $count=0;
    $res=0;
    while($decimal>0)
    {
        if($decimal%2)
        {
            for($i=0;$i<$count;$i++)
                $dec=$dec*10;
        }
        $res=$res+(($decimal%2)*$dec);
        $dec=1;
        $count++;
        $decimal=$decimal/2;
    }
    echo $res;


?>