<?php

$num=600851475143;
$f=2;
$flag=0;

while ($flag==0)
{
	if ($num%$f==0)
	{
		if (($num/$f)==1) $flag=1;
		else $num/=$f;
	}
	else 
	{			
		$f++;
	}
}
echo $f;

?>
