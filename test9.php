<?php
$data = array("abcd","abc","de","hjjj","g","wer");

$max = max(array_map('strlen', $data));
$min = min(array_map('strlen', $data));

echo "The shortest array length is : $min";
echo "\nThe longest array length is  : $max";
?>