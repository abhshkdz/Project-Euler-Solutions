<?php

$sum=0;
$a=1;
$b=2;
do
{
	if ($a%2==0) $sum+=$a;
	if ($b%2==0 && $b<4000000) $sum+=$b;
	$a=$a+$b;
	$b=$a+$b;
} while ($a<4000000);

echo $sum;

?>

