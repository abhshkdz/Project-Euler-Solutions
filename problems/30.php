<?php
  //time=7.22s
  $f=0;
  for ($i=2; $i<1000000; $i++) {
    $sum=0;
    $n=$i;
    while ($n!=0) {
      $d=substr($n,-1);
      $sum+=pow($d,5);
      $n=intval($n/10);
    }
    if ($sum==$i) {
      $f+=$i;
    }
  }
  echo "$f\n";
?>