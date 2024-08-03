<?php

class Student {
    public $name;
    public $age;
    public $course;

    public function setValue($name, $age, $course){
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        // var_dump($this);
    }

    public function getStudent(){
        return "Name: $this->name, Age: $this->age, Course: $this->course";
    }

}

$arvind = new Student();
$arvind->setValue("Arvind", 19, "Html");

echo $arvind->getStudent();

$rakesh = new Student();

$rakesh->setValue("Rakesh", 20, "CSS");
echo "\n";
echo $rakesh->getStudent();

$omprakash = new Student();

$omprakash->setValue('Omrprakash', 23, 'Javascript');
echo "\n";
echo $omprakash->getStudent();