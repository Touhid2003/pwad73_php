<?php
   // $data=  file("readfile.txt");
   // foreach($data as $data){
    
   // }

   $user = file("users.txt");
   // echo "<pre>";
   // print_r($user);
   foreach ($user as $us){
      // echo $us . "<br>";
      list($name, $email) = explode(" ", $us);
      // echo "Name: " . $name . "Email : " . $email . "<br>"; 
      echo "<a href=\"mailto:$email\" >$name</a> | ";
   }

?>
