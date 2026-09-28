<?php
include_once("dbconfiq.php");
$id = $_GET['id'];
$conn->query("DELETE FROM students WHERE id='$id'");
 if($conn->affected_rows){
            header("Location: index.php");
           }
?>