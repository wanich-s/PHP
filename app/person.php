<?php    
    class Person {
        public function __construct(public $name, public $age){}
        public function getName() { return $this->name; }
    }
?>