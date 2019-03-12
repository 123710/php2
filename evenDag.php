<?php
function evenDag()
{
  $datum = date("d");
  echo "De datum van vandaag is $datum"."<br>";
  if ($datum % 2 == 0){
    echo " het is een even getal";
}
    else {
      echo " het is een oneven getal";

  }
}
evendag();
 ?>
