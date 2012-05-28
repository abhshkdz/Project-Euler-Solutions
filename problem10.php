<?php
	//Sieve
	//time = 0.75s
	function primeSieve ($n) {
		$k = ($n-1)/2;
		$a = array_fill(1, $k, 0);
		$c = (floor(sqrt($n))-1)/2;
		for ($i = 1; $i <= $c; $i++) 
			if (!$a[$i]) 
				for ($j = 2*$i*($i+1); $j <= $k; $j += 2*$i+1) 
					$a[$j] = 1;
		return $a;

	}

	function sumSieve($n)
	{
		$k = count($a = primeSieve($n));
		for ($i = 1, $s = 2; $i <= $k; $i++)
			if (!$a[$i]) 
				$s += (2*$i+1);
		return $s;
	}

	echo sumSieve(2000000);



	//Bruteforce method
	//time = 5.16s
	/*
	function isPrime($n) {
		if ($n < 5) 
			return ($n == 2 || $n == 3);
		for ($p = 5, $r = floor(sqrt($n)); $p <= $r; $p += 6) {
			if (!($n%$p)) 
				return false;
			if (!($n%($p+2))) 
				return false;
		}
		return true;
	}

	function sumPrimes($n) {
		if ($n < 2) return 0;
		if ($n < 3) return 2;
		if ($n < 5) return 5;
		for ($s = $p = 5; $p <= $n; $p += 6) {
			if (isPrime($p)) 
				$s += $p;
			if (isPrime($p+2) && $p+2 <= $n)
				$s += $p+2;
		}
		return $s;
	}

	echo sumPrimes(2000000); 
	*/

?>
