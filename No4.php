<?php
  function arkaFood($hargaawal, $voucher, $jarak, $pajak)
  {
    $jarakmin = 1.5;
    $hargajrkmin = 5000;
    $hargajrktmbh = 3000;
    $trfpajak = $pajak=='False' ? 0 : 0.05;

    if($voucher=='ARKAFOOD5') {
      $diskon = 0.5;
      $pesanmin = 50000;
      $potonganmax = 50000;
    } else if ($voucher=='DITRAKTIRDEMY') {
      $diskon = 0.6;
      $pesanmin = 25000;
      $potonganmax = 30000;
    } else {
      $diskon = 0;
      $pesanmin = 0;
      $potonganmax = 0;
    }

    if($hargaawal >= $pesanmin) {
      $potongan = $hargaawal * $diskon;
      if($potongan > $potonganmax) {
        $potongan = $potonganmax;
      }
    } else {
      $potongan = 0;
    }

    $hrgmakan = $hargaawal - $potongan;
    if(floor($jarak) > $jarakmin) {
      $tmbhjrk = $jarak - floor($jarakmin);
      $hrgkirim = 5000 + floor($tmbhjrk)*3000;
    } else {
      $hrgkirim = 5000;
    }

    $hargaakhir = $hrgmakan + $hrgkirim + $hrgmakan*$trfpajak;
    return $hargaakhir;
  }

  echo arkaFood(75000,'ARKAFOOD5',5,'False');

?>
