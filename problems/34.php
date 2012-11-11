<?php
  //time=1.20s
  function factorial($n) {
    if ($n==0) return 1;
    return $n*factorial($n-1);
  }
  $f=0;
  for ($i=3; $i<100000; $i++) {
    $sum=0;
    $n=$i;
    while ($n!=0) {
      $d=substr($n,-1);
      $sum+=factorial($d);
      $n=intval($n/10);
    }
    if ($sum==$i) {
      $f+=$i;
    }
  }
  echo "$f\n";
?>