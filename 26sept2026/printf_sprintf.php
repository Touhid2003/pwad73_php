<h1>Printf</h1>
<?php
    printf("Bar inventory : %d bottles of tonic", 100);
    echo "<br>";
    printf("%s %s", "HTML","CSS");
    echo "<br>";
    printf("$ %.2f", 100, 200);
?>
<h1>sprintf</h1>

<?php
    $cost = sprintf("$ %.2f", 43.2);
    echo $cost;
?>