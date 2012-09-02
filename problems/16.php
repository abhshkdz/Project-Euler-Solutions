<?php
	$sum = 0;
	$forty = pow(2,40);
	$n = $forty;
	for ($i=1; $i<25; $i++) 
		$n = bcmul($n, $forty);
	$digits = str_split($n);
	foreach ($digits as $digit)
		$sum = bcadd($sum, $digit);
	echo $sum;
?>