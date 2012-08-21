<?php
	
	function factorial ($num) {
		if ($num==1) 
			return 1;
		else 
			return bcmul($num, factorial ($num-1));
	}

	function sumofdigits ($num) {
		$digits = str_split($num);
		$sum=0;
		foreach ($digits as $digit) {
			$sum+=$digit;
		}
		return $sum;
	}

	echo sumofdigits(factorial(100));

?>