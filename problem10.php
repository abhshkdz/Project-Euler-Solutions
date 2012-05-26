<?php

	//Sieve
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

	function sumSieve($n)
	{
		$b = count($p = primeSieve($n));
		for ($i = 1, $s = 2; $i <= $b; $i++)
			if (!$p[$i]) 
				$s += (2*$i+1);
		return $s;
	}

	echo sumSieve(2000000); // time 0.75s



	//Bruteforce method
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

	echo sumPrimes(2000000); // time 5.16s
	*/

?>