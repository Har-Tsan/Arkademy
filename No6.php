
<?php
 function mrBrulee($operator, $N, $numarray)
 {
   if($N > 1000) {
     return Null;
   } else {
     $number = "";
     for($i=1; $i<=$N; $i++) {
       $number = $number.strval($i);
     }
     //echo $number;
     $result = 0;
     for($i=0; $i<=count($numarray)-1; $i++) {
       if($i==0) {
         $result = $number[$numarray[$i]-1];
       } else {
         if ($operator == 'SUM') {
           $result = $result + $number[$numarray[$i]-1];
         } else if ($operator == 'MUL') {
           $result = $result * $number[$numarray[$i]-1];
         } else if ($operator == 'SUB') {
           $result = $result - $number[$numarray[$i]-1];
         } else if ($operator == 'DIV') {
           $result = $result / $number[$numarray[$i]-1];
         } else {
           $result = Null;
         }
       }
     }
     return $result;
   }
 }

 echo mrBrulee('SUM',20,[11,13,15]);
 echo mrBrulee('MUL',20,[12,15,17]);
?>
