<?php
 //optellen
  require_once("calculator_include.php");
  if($_POST['operator'] == "+"){
    echo sum($_POST['number1'], $_POST['number2']);
  }
  //aftrekken
  if ($_POST['operator'] == "-"){
    echo minus($_POST['number1'], $_POST['number2']);
  }
  //keer
  if ($_POST['operator'] == "*") {
    echo keer($_POST['number1'], $_POST['number2']);
  }
  //delen
  if ($_POST['operator'] == '/') {
    echo delen($_POST['number1'], $_POST['number2']);
  }
  if ($_POST['operator'] == '!') {
    echo waardeOmzetten($_POST['number1'], $_POST['number2']);
  }
 ?>
