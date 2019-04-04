<?php
//Is een variabele alleen alfabetisch?
// is een variabele alleen numeriek?
function alfabetischTest($text){
  return preg_match("/^[A-Za-z]+$/",$text);
}
function numeriekTest($text){
  return preg_match("/^[0-9]+$/",$text);
}
// Nederlandse postcode check
function PostCodeCheck($postCode){
  return preg_match("/^[1-9][0-9]{3}[A-Za-z]{2}$/",$postCode);
}

// Nederlandse mobielNummer check
function mobielNummerCheck($mobielNummer){
  return preg_match("/^06[0-9]{8}$/",$mobielNummer);
}
//Is een variabele alleen “man” of “vrouw”
function ManOfVrouwCheck($ManOfVrouw){
  return preg_match("/^(man|vrouw)$/", $ManOfVrouw);
}

//emailadres check
function emailadresCheck($emailadres){
  return preg_match("/^[a-zA-Z0-9\.]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/",$emailadres);
}
//is een variabele een adres (alfabetisch opgevolgd door numeriek
function adresCheck($adres){
  return preg_match("/^[a-zA-Z]+ [0-9]+[a-zA-Z]*$/",$adres);
}



 ?>
