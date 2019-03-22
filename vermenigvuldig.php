<?php
  function vermenigvuldig($aantal, $getal)
  {
    if ($aantal==0) {
      return 0;
      }
      else if ($aantal==1) {
        return $getal;
        }
        else {
          return vermenigvuldig($aantal-1,$getal)+$getal;
      }
  }
  echo ("1 * 15 = " . vermenigvuldig(1,15))."<br>";
  echo("4 * 3 = " . vermenigvuldig(4, 3))."<br>";
echo("6 * 5 = " . vermenigvuldig(6, 5))."<br>";

 ?>
