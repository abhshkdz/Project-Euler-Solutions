<?php
	//time = 0s
	for ($i = 2; ;$i++) {
	  	for ($j = 1; $j < $i; $j++) {
	    	$a = pow($i, 2)-pow($j, 2);
	    	$b = 2*$i*$j;
	    	$c = pow($i, 2)+pow($j, 2);
	    	if ($a+$b+$c == 1000) 
	    		break 2;
	  	}
	}
	echo $a*$b*$c;
?>