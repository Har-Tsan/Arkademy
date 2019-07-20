<?php
  function evenSum($n)
  {
    $number = fibonanci($n);
    $sum = 0;
    foreach($number as $num) {
      if($num%2 == 0) {
        $sum += $num;
      }
    }
    return $sum;
  }

  function oddSum($n)
  {
    $number = fibonanci($n);
    $sum = 0;
    foreach($number as $num) {
      if($num%2 != 0) {
        $sum += $num;
      }
    }
    return $sum-1;
  }

  function fibonanci($n)
  {
    $number = array(0,1);
    while($number[count($number)-2]+$number[count($number)-1]<=$n) {
      array_push($number, $number[count($number)-2]+$number[count($number)-1]);
    }
    return $number;
  }

echo oddSum(1000);
echo evenSum(1000);
?>
