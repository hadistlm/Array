<?php
$data = [33, 12, 434, 0, -10];
$minus = min($data);

echo "List Of Array : ";
foreach ($data as $key) {
	echo " $key, ";
}

echo "\nlowest integer that is not 0 : $minus";
?>