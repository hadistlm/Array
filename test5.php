<?php
//
function ascvalue()
{
	$data = array("Sophia" => "31","Jacob" => "41", "William"=>"39", "Ramesh"=>"40");
	asort($data);

	foreach ($data as $key => $value) {
 		echo "$value = $key \n";
	}
}

function asckey()
{
	$data = array("Sophia" => "31","Jacob" => "41", "William"=>"39", "Ramesh"=>"40");
	ksort($data);	
	foreach ($data as $key => $value) {
 		echo "$value = $key \n";
	}
}

function dscvalue()
{
	$data = array("Sophia" => "31","Jacob" => "41", "William"=>"39", "Ramesh"=>"40");
	arsort($data);
	foreach ($data as $key => $value) {
 		echo "$value = $key \n";
	}	
}

function dsckey()
{
	$data = array("Sophia" => "31","Jacob" => "41", "William"=>"39", "Ramesh"=>"40");
	krsort($data);
	foreach ($data as $key => $value) {
 		echo "$value = $key \n";
	}
}

echo "\nASC By Value\n";
ascvalue();

echo "\nASC By Key\n";
asckey();

echo "\nDSC By Value\n";
dscvalue();

echo "\nDSC By Value\n";
dsckey();
?>