<?php

  function splitstring($kalimat)
  {
    $list_string = array('pro','program','programmer','gram','it','merit');
    $checklist = array();
    $result = array();
    foreach ($list_string as $s) {
       if (strpos($kalimat, $s) !== false) {
           array_push($checklist,$s);
       }
     }
     foreach ($checklist as $c) {
       $listing = array();
       if(substr($kalimat,0,strlen($c)) == $c) {
           array_push($listing,$c);
           $mark = strlen($c);
           //3
           foreach ($checklist as $ch) {
             //3-
             if(substr($kalimat,$mark,strlen($ch)) == $ch) {
               array_push($listing,$ch);
               $mark = $mark + strlen($ch);
             }
           }
           array_push($result,$listing);
       }
     }
     return $result;
  }

  $kalimat = 'programmerit';
  $result = splitstring($kalimat);
  print_r($result);
?>
