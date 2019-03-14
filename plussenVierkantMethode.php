<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
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
     echo maakVierkant(5 ,5 );
     echo "<br>";
     echo maakVierkant(15 ,9 );
     ?>
  </body>
</html>
