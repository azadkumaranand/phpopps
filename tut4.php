<?php

/*

Magic Method

__get() => called when call undefined properties
__set() => called when set undefined properties
__call() => called when invoke undefined methods
__toString() => when convert object to string


*/ 


final class Student{
    public $name;
    public function __construct(){
        $this->name = "azad";
    }
    
    public function __get($propertiy){
        if(property_exists($this, $propertiy)){
            return $propertiy;
        }
        echo "Properties not found";
    }

    public function __set($a, $b){
        // echo $a, $b;
        if(property_exists($this, $a)){
            return $this->$a = $b;
        }
        echo "Properties not found";
    }

    public function __destruct(){

    }
}

// class Azad extends Student{

// }

$student = new Student();

echo $student->name;
echo "\n";
echo "\n";

$student->course = "html";
