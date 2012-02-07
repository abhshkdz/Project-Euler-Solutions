<?php

function prime($a)
{
    if ($a<2) return FALSE;
    for ($i=2; $i<=sqrt($a); $i++)
		if ($a%$i==0) return FALSE;
	return TRUE;
}

for ($i=3; $i<10000; $i+=2)
{
	if (prime($i) && 600851475143%$i==0)
	{
		$a=$i;
	}
}

echo $a;

?>
