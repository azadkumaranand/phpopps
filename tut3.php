<?php

class Student{
    public $name;
    public $age;

    // function __construct($name, $age){
    //     $this->name = $name;
    //     $this->age = $age;
    // }
}

class Boy extends Student{
    public $course;

    public function __construct($name, $age, $course){
        $this->course = $course;
        $this->name = $name;
        $this->age = $age;
        // parent::__construct($name, $age);
    }

    function getStudentDetails(){
        return "Name: $this->name, Age: $this->age, Course: $this->course, Male";
    }
}
class Girl extends Student{
    public $course;

    public function __construct($name, $age, $course){
        $this->course = $course;
        $this->name = $name;
        $this->age = $age;
        // parent::__construct($name, $age);
    }

    function getStudentDetails(){
        return "Name: $this->name, Age: $this->age, Course: $this->course, Female";
    }
}

$arvind = new Boy("Arvind", 19, 'Html');

echo $arvind->getStudentDetails();

$suman = new Girl('Suman', 18, 'Css');
echo "\n";
echo $suman->getStudentDetails();