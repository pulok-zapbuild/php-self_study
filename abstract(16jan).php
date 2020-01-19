<?php
    abstract class abc #abstract class 
    {
        function and()
        {
            echo "simple function<br><br>";
        }
        abstract function abs(); #abstract function
    }
    class newe extends abc
    {
        public function abs() #definning abstract class function
        {
            echo "abstract func defined in new class";
        }
    }

    #creating the object of class newe
    $obj = new newe();

    #calling the normai funtion  of abstrct class "abc" using the object"obj" of class "abc"
    $obj->and();

    #and here call the abstruct function"abs()" of abstract class"abc" using the object"obj" of class "abc"
    $obj->abs();
    
?>
