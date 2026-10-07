<?php
class MyClass {
  public $color;
  public $amount;
}

$obj = new MyClass();
$obj->color = "red";
$obj->amount = 5;

echo "<pre>";
print_r($obj);

echo "<hr>";


$copy = clone $obj;
$copy->color = "Green";
$copy->amount = 20;

echo "<pre>";
print_r($copy);

$copy1 = clone $copy;
$copy1->color = "Blue";
$copy1->amount = 30;

echo "<pre>";
print_r($copy1);
?>
?>