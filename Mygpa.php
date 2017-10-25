<?php
//--MYGPA 459355121010 รัชฏาพร พรมมา
$name = "นางสาวรัชฏาพร พรมมา";
$score = "65";
	if($score>="80") {
		echo"$name เกรด  A";
		
	}else if ($score >="75") {
		echo "$name เกรด B+";
		
	}else if ($score >="70") {
		echo "$name เกรด B";
		
	}else if ($score >="65") {
		echo "$name เกรด C+";
		
	}else if ($score >="60") {
		echo "$name เกรด C";
		
	}else if ($score >="55") {
		echo "$name เกรด D+";
		
	}else if ($score >="50") {
		echo "$name เกรด D";
		
	}
	else {
		echo "$name เกรด F";
		
	}
		
?>
	