<?php
function Fibonacci($number){
  if ($number == 0)
      return 0;
  else if ($number == 1)
      return 1;
  else
      return (Fibonacci($number-1) +
              Fibonacci($number-2));
}
$number = 10;
echo "De Fibonacci reeks is: ";
for ($counter = 0; $counter < $number; $counter++){
  echo Fibonacci($counter),' ';
}
for ($element=0; $element < 0 ; $element++) {
}
for ($counter = 0; $counter < $number; $counter++){

  echo "<br>"."Element ".$element++." = ". Fibonacci($counter);
}

 ?>
