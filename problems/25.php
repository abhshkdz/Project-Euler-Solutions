<?
	$a = 1;
	$b = 1;
	$n = 2;
	while (strlen($b.'')<1000) {
		$a = bcadd($a,$b);
		$b = bcadd($a,$b);
		$n+=2;
	}
	echo $n."\n";
?>
