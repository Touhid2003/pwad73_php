
<h1>Type casting</h1>
<?php
    $core = (float) "13.52";
    echo $core;
    echo "<br>";
     var_dump($core);

    echo "<br>";

     $x = (array) "Rokon";
     echo "<pre>";
     var_dump($x);

     echo "<br>";
     $arr = (object) [10, 20, 30];
     var_dump($arr);

?>
<h1>type juglling </h1>
<?php
    $totol = 10;
    $count = "20";
    $totol = $totol + $count;
    echo $totol;
    echo "<br>";
    $val1 = "1.2e3";
    $val2 = 2;
    $result = $val1 * $val2;
    echo $result;
?>