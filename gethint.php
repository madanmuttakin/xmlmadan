<?php
//array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Elza";
$a[] = "Hamdan";

//get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
	$q = strtolower($q);
	$len =strlen($q);
	foreach($a as $name) {
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			} else { 
				$hint .= ", $name";
			}
		}
	}
}
echo $hint === "" ? "no suggestion" : $hint;
?>