<?php
    $flower = ["Rose", "Waterlily", "Sunflower"];
    $name = "Moheuzzaman";
    $number = 100;
    echo "<pre>";
    
    var_dump($flower);
    var_dump($number);
    var_dump($name);


    function myText() {
       static $x = 10;
        echo $x;
        $x++;
        
    }
    myText();
    echo "<br>";
     myText();
    echo "<br>";
     myText();
    echo "<br>";
?>