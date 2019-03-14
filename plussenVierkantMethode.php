
<?php
  // $plussenvierkant = "++++";
  // $aantaal = 12 ;
  // $vierkant = telOp($plussenvierkant, $aantaal);
  // echo $vierkant;
  // function telOp($plussenvierkant, $aantaal){
  //   return $plussenvierkant . $aantaal;
  // }
 ?>
 <?php
  // function maakVierkant($Vierkant= "+++++")
  // {
  //  echo "$Vierkant<br>";
  // }
  // maakVierkant();
  // maakVierkant();
  // maakVierkant();
  // maakVierkant();
  // maakVierkant();


 function maakVierkant( $breedte, $hoogte){
   $output = "";
   for($h =0 ;$h < $hoogte ; $h++){
     for($b = 0; $b < $breedte; $b++){
       $output .= "x";
     }
     $output .= "<br>";
   }
   return $output;
 }

 echo maakVierkant(6 ,9 );

 echo "<br>";

 echo maakVierkant(15 ,9 );

 ?>
