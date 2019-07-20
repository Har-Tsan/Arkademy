<?php
 $list_string = array('pro','gram','merit','program','it','programmer');

$kalimat = 'programit';
$checklist = array();
foreach ($list_string as $s) {
  if (strpos($kalimat, $s) !== false) {
      echo $s." ";
      array_push($checklist,$s);
  }
  
}


?>
