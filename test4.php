<?php

$data = array('1','2','3','4','5');
$ganti = array('$');

array_splice($data, 3,0, $ganti);
$det = implode($data); 

echo " $det ";
?>