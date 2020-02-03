<?php


    function __autoload($var)#function defined
    {
        require_once $var.".php";
    }

    #here the cload.php file get includeed in this script
    $obj = new cload; 

    #using the function of class cload of cload.php file
    echo $obj->abc();

?>