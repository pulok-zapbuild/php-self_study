<?php
    $x = array(1, 2, 3, 4, 5);
    var_dump($x);
    var_dump(array_splice($x,2,1));
    #unset($x[2]); we can use unset also
    var_dump($x);
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    echo current($color);

?>