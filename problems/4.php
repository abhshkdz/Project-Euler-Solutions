<?php
	//time = 0.96s
	function palindrome ($a) {
		$b=$a;
		$c=0;	
		while ($b) {
			$c+=$b%10;
			$c*=10;
			$b/=10;
			$b=(int)$b;
		}
		//echo $c;
		$c/=10;
		//echo "$c<br>";
		if ($a==$c) return 1;
		return 0;
	}
	
	$n=0;
	
	for ($i=100; $i<1000; $i++)	
		for ($j=100; $j<1000; $j++)
			if(palindrome($i*$j) && $n<($i*$j)) $n=($i*$j);	

	echo $n;
?>
