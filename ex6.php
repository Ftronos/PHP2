<?
	function power($val, $pow) {
		if ($pow == 0) {
			return 1;
		};
		if ($pow < 0){
			return power( 1/$val, -$pow); // -$n значит смену знака с отрицательного на положительный
		}
		return $val * power($val, $pow - 1);
	}

	echo power(2, 6);