<?php
	//time = 0s
	/*
	expression for sum of squares from 1 to n - (n*(n+1)*(2n+1))/6	
	expression for square of sum from 1 to n - ((n*(n+1))/2)*((n*(n+1))/2)
	finally, expression for difference - (n*(3n+2)*(n*n-1))/12
	*/
	$n = 100;
	$result = ($n*(3*$n+2)*($n*$n-1))/12;
	echo $result;
?>
