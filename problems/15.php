<?php

	function factorial ($num) {
		if ($num==1) 
			return 1;
		else 
			return bcmul($num, factorial ($num-1));
	}

	function numberofcombinations ($n, $r) {
		$fac_r = factorial ($r);
		$fac_n = factorial ($n);
		$fac_n_r = factorial ($n-$r);

		return bcdiv ($fac_n, bcmul($fac_r, $fac_n_r));
	}

	echo numberofcombinations(40,20);

?>