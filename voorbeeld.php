<?php
  $text = "voorbeeld letters";
  for ($i=0; $i < strlen($text); $i++) {
    if(substr($text, $i, 1) == "e"){
      echo $i .  "&nbsp" . "" . "<br>";
    } else {
      echo $i .  "&nbsp" . substr($text, $i, 1) . "<br>";
    }
  }

 ?>
 <?php
 echo "<br>";
   $text = "voorbeeld letters";
   for ($i=strlen($text) - 1; $i >= 0 ; $i--) {
     echo $i .  "&nbsp" . substr($text, $i, 1) . "<br>";
   }

  ?>
