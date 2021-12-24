<?php
    // Object functions
    class Student {
        function __construct(public $name, public $major, public $gpa){}
        function hasHornors() {
            if($this->gpa >= 3.5) {
                return "true";
            }else {
                return "false";
            }
        }
    }
    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "art", 3.6);

    echo $student1->hasHornors() . "<br>";
    echo $student2->hasHornors();
?>