<?
	$h = date('H');
	$m = date('i');

	if ($h == 1 or $h == 21) {
		echo $h." час ";
	} elseif (($h > 1 and $h < 5) or ($h > 21 and $h < 24)) {
		echo $h." часа ";
	} else {
		echo $h." часов ";
	}

	if ($m % 10 == 1 or $m == 01) {
		echo $m." минута";
	} elseif (($m % 10 > 4 and $m % 10 <= 9) or ($m > 05 or $m == 06 or $m == 07 or $m == 08 or $m == 09) or ($m > 10 and $m < 20)) {
		echo $m." минут";
	} else {
		echo $m." минуты";
	}