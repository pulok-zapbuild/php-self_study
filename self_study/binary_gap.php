<?php
    $binary=[1,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,1,0,0,0,1];
    $count1=0;$count2=0;
    $max=0;
    while($count1<count($binary))
    {
        $count2=0;
        while($binary[$count1]==0)
        {
            $count2++;
            $count1++;
        }
        if($count2>$max)
        {
            $max=$count2;
        }
        $count1++;
    }
    echo "\n".$max;
    /*while($res>0) # to find the binary gap in decimal no.
    {
        $count2=0;
        while($res%10==0 && $res>0)
        {
            $count2++;
            $res=intval($res/10);
            echo $res."\n";
        }
        echo $count2;
        if($count2>$max)
        {
            $max=$count2;
        }
        $res=$res/10;
    }
    echo "binary gap : ".$max;*/

?>