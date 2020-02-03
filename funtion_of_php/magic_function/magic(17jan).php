<?php

  class dog
  {
    public $existed="exited variable<br><br>";

    public function __construct($id) #magic_function constructor
    {
      $this->text="object output as a string";
      echo "constructor called with arg ".$id."<br><br>";
    }

    public function __destruct()  #magic_function destructor
    {
      echo "destructor called";
    }

     public function __call($method, $args) #magic function to avoid the error if we call any undefined function
    {
        echo "unknown method named(" . $method.")<br><br>";
        return false;
    }

    public function exist()   #created a funtion to explain the _call method
    {
        echo "exited function<br><br>";
    }

    public function __toString() #magic function to change the character of object
    {
        return $this->text . "<br><br>";
    }

   
    public function __get($arg) #magic funtion _get to avoid  the error in undefined variable
    {
      echo "variable not defined(".$arg.")<br><br>";
    }
  }
  #creating object {obj} of class dog and as construct is envoked when a object is created
  #so constructor function is also called.... 
  $obj = new dog(12);

  #calling the created function using the object of class 
  $obj->exist();

  #calling any funtion which  is not created in class 
  #here the magic function _call() will use to encouter the error and show the msg written  
  $obj->any();

  #here we are changing the properties of object by using 
  #magic function _tostring()
  echo $obj;

  #accessing and using the deffined variable in the class 
  echo $obj->existed;


  #try to call an undefined variable of class
  #here the magic function _get() to resolve the error and shows the desired msg
  $obj->not_exist;
?>