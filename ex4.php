<?
	function sum($a, $b) {
		return $a + $b;
	}

	function minus($a, $b) {
		return $a - $b;
	}

	function composition($a, $b) {
		return $a * $b;
	}

	function division($a, $b) {
		return $a / $b;
	}

	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation) {
			case "+":
				echo sum($arg1, $arg2);
				break;
			case "-":
				echo minus($arg1, $arg2);
				break;
			case "*":
				echo composition($arg1, $arg2);
				break;
			case "/":
				echo division($arg1, $arg2);
				break;
			default:
				echo "Введена некорректная операция";
		}
	}

	mathOperation(13, 15, "/");