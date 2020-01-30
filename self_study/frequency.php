<?php
    $str="aanandkumar";
    $count=0;
    $set=1;
    for($i=0;$i<strlen($str);$i++)
    {
        $set=1;
        for($j=0;$j<$i;$j++)
        {
            if($str[$i]==$str[$j])
            {
                $set=0;
            
            }
        }
        if($set==1)
        {
                for($j=$i;$j<strlen($str);$j++)
                {
                    if($str[$i]==$str[$j])
                        $count++;
                }
                echo $str[$i]."-->>".$count."\n";
                $count=0;
        }
        
    }

    



?>