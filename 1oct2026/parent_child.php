<?php
// parent class
    class myClass {
        public $name;
        protected $age;


        // Method
        function welcome(){
            echo "Name :  " . $this->name;
        }
       
    }

    $obj1 = new myClass;
    
    $obj1->name= "Rokon";
    $obj1->age= 22;
    $obj1->welcome();
    
    
   
    

    
?>