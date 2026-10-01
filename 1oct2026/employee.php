<?php
    class Employee{
        private $name;
        private $title;

        //getter nmethods
        public function getName(){
            return $this->name;
            
        }
        // setter methods
        public function setName($name){
            $this->name = $name;
        }
       public function sayHello(){
            echo "Hello, my name is " . $this->name;
        }
    }

    $obj1= new Employee();
    $obj1->setName("Moheuzzaman");
    $obj1->sayHello();
?>