<?php

/**
 * include array input file for Paytm Shere
 * @var $x, $s, $m, $h (fetch current time with Seconds)
 * counting total 100 array
 * @var $page, $sec (refreshing the page every second)
 */ 

include("Input_Paytm_Shere.php");
asort($array);
echo "<pre>";

 $page = $_SERVER['PHP_SELF'];
 $sec = "1";
 header("Refresh: $sec; url=http://localhost/competition/Paytm_Shere/Paytm_Shere.php");
$x = getdate();
$s = $x['seconds'];
$m = $x['minutes'];
$h = date("h:i");
	$enternumber = 3;
	$slice = array_slice($array, -$enternumber, 101, true);
	    foreach($slice as $x => $x_value) {
	    	$maximum = max($x_value);
	  	echo "[".$maximum.",".$h.":".$s."]"."<br />";
	}
?>