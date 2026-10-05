<?php
    $file = '../myfile.txt';
   $time =  fileatime($file);
   echo date("y m d m:i", $time);
?>