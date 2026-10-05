<?php
    $path = 'E:\xampp\htdocs\pwad73_php\5oct2026\myfile.txt';
     $info = pathinfo($path);
     echo "<pre>";
     print_r($info);
    echo $info['basename'] . "<br>";
    echo $info['dirname'];
?>