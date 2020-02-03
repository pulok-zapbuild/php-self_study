<?php
    $str="pulok";
    $angram="uokpo";
    $count=0;
    unset($angarm);
    echo $angarm."\n";
    if(strlen($str)==strlen($angram))
        {
            for($i=0;$i<strlen($str);$i++)
            {
                for($j=0;$j<strlen($str);$j++)
                {
                    echo "hii\n";
                    if($angram[$i]!=$str[$j])
                    {
                        $count=1;
                    }
                    else
                    {
                        $count=0;
                        break;
                    }
                }
                if($count==1)
                    break;
            }
            if($count==1)
                echo "not angram";
            else    
                echo "angram";
        }


?>