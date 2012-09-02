<?php
	//time = 18.711571931839s
	function sequence_length ($n) {
		$l = 1;
		while ($n!=1) {
			$n = $n%2==0 ? $n/2 : 3*$n + 1;
			$l++;
		}
		return $l;
	}
	$max = 100;
	$max_l = sequence_length(100);
	for ($i=100; $i<1000000; $i++) {
		$l =  sequence_length($i);
		if ($l > $max_l) {
			$max = $i;
			$max_l = $l;
		}
	}
	echo $max;
?>