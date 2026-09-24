<?php
    $cities = array("Dhaka", "Rajshahi", "Bogura", "Borisal", "Naograon");
    echo "<pre>";
    
    print_r($cities);
?>
<?php
    $cities = array("Dhaka", "Rajshahi", "Bogura", "Borisal", "Naograon");
    echo "<pre>";
    array_push($cities, "Nator", "pabna");
    print_r($cities);
?>
<?php
    $cities = array("Dhaka", "Rajshahi", "Bogura", "Borisal", "Naograon");
    echo "<pre>";
    array_shift($cities);
    print_r($cities);
?>
<?php
    $cities = array("Dhaka", "Rajshahi", "Bogura", "Borisal", "Naograon");
    echo "<pre>";
    array_unshift($cities);
    print_r($cities);
?>
<?php
   
    
   
         $cities = array("Dhaka", "Rajshahi", "Bogura", "Borisal", "Naograon");
        
        for($i = 0; $i<count($cities); $i++){
           $x =  $cities[$i];
            echo "<br>" .$x;

        }
        echo "<br>";
   
?>
<?php
   
    
   
         $cities = array("Dhaka", "Rajshahi", "Bogura", "Borisal", "Naograon");
    $i =0;
        
        while($i<count($cities)){
            echo "<br>" .$cities[$i];
            $i++;
        }

       
?>

