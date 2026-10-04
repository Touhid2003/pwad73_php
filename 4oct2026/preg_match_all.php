<?php
    // $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
    // preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
    // echo "<pre>";
    // print_r( $pat_array);
    // $foods = array("pasta", "steak", "fish", "potatoes");
    // $food = preg_grep("/a$/", $foods);
    // print_r($food);
//      $text = "This is a link to http://www.wjgilmore.com/.";
//      echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>",
// $text);
    $delimitedText = "Jason+++Gilmore+++++++++++Columbus+++OH";
    $fields = preg_split("/\++/", $delimitedText);
    foreach($fields as $field) echo $field."<br />";
?>