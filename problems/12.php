<?php
	//time = 11.22s
	function number_of_divisors ($num) {
		$count=0;
		for ($i=1; $i<=sqrt($num); $i++)
			if ($num%$i==0) $count+=2;
		return $count;
	}
	$n=1;
	$num=1;
	while (number_of_divisors($num) < 500) {
		$n++;
		$num = ($n*($n+1))/2;
	}
	print_r($num);
?>