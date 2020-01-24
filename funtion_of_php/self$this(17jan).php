<?php
    class Job {
        
        public $name;
        public $desc;
        public static $company;
        
        #fuction use to set the public simple variable
        public function getName() {
            return $this->name;
        }
        
        #fuction use to get the public simple variable
        public function getDesc() {
            return $this->desc;#this variable is belong to class and object both so we use $this to refer it
        }
        
        #function to get the static variable
        public static function getCompany() {
            return self::$company; #as  static variable is belong to class only so we use self to refer it
        }
        
        
        public function getCompany_nonStatic() {
            return self::getCompany();#here also static function is belong to class only so we didi the same as above
        }
    }
    
    $objJob = new Job();
    
    #accessing the normal variable through object of class
    $objJob->name = "Data Scientist";
    $objJob->desc = "You must know Data Science";
    
    /* 
        setting value for static variable.
         using the class name
    */
    Job::$company = "Studytonight";
    
    // calling the methods
    #to set and get the value of normal variabal with help of object
    echo "Job Name: " .$objJob->getName()."<br/>";
    echo "Job Description: " .$objJob->getDesc()."<br/>";

    #here we use class name to access the static function 
    echo "Company Name: " .Job::getCompany_nonStatic();

?>