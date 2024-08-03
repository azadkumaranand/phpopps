<?php

// magic method (function) in php

// __construct, __destruct

class Student{
    public $name;
    public $age;
    public $course;

    function __construct($name, $age, $course){
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    function __destruct(){
        echo "\nName: $this->name, Age: $this->age, Course: $this->course";
    }
}

new Student("Arvind", 19, "Html");
new Student("Rakesh", 20, "CSS");
new Student('Omrprakash', 23, 'Javascript');