<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "Values are in lower case: \n";
print_r(array_map('strtolower', $Color));

echo "Values are in upper case: \n"; 
print_r(array_map('strtoupper', $Color));
?>