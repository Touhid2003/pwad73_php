<?php
    class myClass {
        public $name;
        public $age;


        // Method
        function welcome(){
            echo "Name :  " . $this->name;
        }
       
    }

    $obj1 = new myClass;
    
    $obj1->name= "Rokon";
    $obj1->age= 22;
    echo "<pre>";
    //var_dump($obj1);
    $obj1->welcome();
    
    $obj2 = new myClass;
     $obj2->name= "Moheuzzaman";
    $obj2->age= 24;
    echo "<pre>";
    //var_dump($obj2);
    $obj2->welcome();
    

    
?>