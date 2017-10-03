<?php
$colors = array("a"=>"Red", "b"=>"Green", "c"=>"Yellow", "d"=>"Red","e"=>"Red");


    $count = 0; 
    foreach ($colors as $key => $value) 
    { 
        if ($value == "Red") 
        { 
            $count++; 
        } 
    } 

$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");

echo "\n Red color appears $count time(s). \n"; 
?>