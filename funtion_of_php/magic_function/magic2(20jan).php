<?php
class mag
{
    public $a=12;
    public function __isset($var)
    {
        echo "is ".$var." set<br>";
        
    }
    public function __unset($var)
    {
        echo $var." variable doesnot exist";
    }

}
$obj = new mag();


#__unset() function called here
unset($obj->p);

#__isset() function called here
$b=isset($obj->j);
echo "<br>".$b;

?>