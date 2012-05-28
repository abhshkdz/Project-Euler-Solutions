<?php
	//time = 0.33s
	function primeSieve ($n) {
		$b = ($n-1)/2;
		$p = array_fill(1, $b, 0);
		$c = (floor(sqrt($n))-1)/2;
		for ($i = 1; $i <= $c; $i++) 
			if (!$p[$i]) 
				for ($j = 2*$i*($i+1); $j <= $b; $j += 2*$i+1) 
					$p[$j] = 1;
		return $p;

	}
	$j=0;
	$prime[$j++]=2;
	$b = count($p = primeSieve(1000000));
	for ($i = 1, $s = 2; $i <= $b; $i++)
		if (!$p[$i]) 
			$prime[$j++] = 2*$i+1;
	echo $prime[10000];
?>
