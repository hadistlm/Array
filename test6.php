<?php
error_reporting(0);

$data = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$number = count($data);
$sum = array_sum($data);
$avg = ($sum/$number);
echo "The average is: $avg \n\n"; 

	function minval()
	{
		$data = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
		$data1 = array_unique($data);
		sort($data1);
		foreach ($data1 as $val) {
		$num++;
		if($num<6){
			echo "$val, ";
			}
		}
	}

	function maxval()
	{
		$data = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
		$data1 = array_unique($data);
		rsort($data1);
		foreach ($data1 as $val) {
			$num++;
			if($num<6){
				echo "$val, ";
			}
		}
	}

echo "List of seven lowest temperatures : "; minval();
echo "\nList of seven highest temperatures: "; maxval();
?>