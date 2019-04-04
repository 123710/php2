<?php
//Is een variabele alleen alfabetisch?
// is een variabele alleen numeriek?
  require_once("testenInclude.php");
  echo "alfa " . alfabetischTest("dfdhskfjheHGJHGDHGwiuriddkjghasrwah");
  echo "<br>";
  echo "nummers " . numeriekTest("20193279125986140596508746575086");
  echo "<br>";
  // Nederlandse postcode check
  echo "postcode " . PostCodeCheck("1294AZ");
  echo "<br>";
  // Nederlandse mobielNummer check
  echo "mobiel " . mobielNummerCheck("0612345678");
  echo "<br>";
  //emailadres check
  echo "email " . emailadresCheck("ajdaslkdj.adsdaad.dasdkal@hlfjasdlfkjsdlkj.je");
  echo "<br>";
//
  echo "geslacht " . ManOfVrouwCheck("vrouw");
  echo "<br>";
  //is een variabele een adres (alfabetisch opgevolgd door numeriek
  echo "adres " . adresCheck("pelikaan 82");
 ?>
