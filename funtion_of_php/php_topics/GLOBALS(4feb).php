<?php
$a="global var\n";//global variable
class glob
{
    private $a="class var\n";//class variable
    public function globalKeyword()
    {
        $a="local var\n";//local variable

        //accessing the local variable
        echo $a;
        //accessing the class variable
        echo $this->a;
        //accessing the global variable using GLOBALS keyword
        echo $GLOBALS['a'];
    }
}
$obj=new glob();
$obj->globalKeyword();


$x = 75;
$y = 25; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;


?>