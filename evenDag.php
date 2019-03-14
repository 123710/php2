<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function evenDag()
    {
      $datum = date("d");
      echo "De datum van vandaag is $datum"."<br>";
      if ($datum % 2 == 0){
        return true;
    }
        else {
          return false;
      }
      //return ($datum % 2 == 0);
    }
    if(evendag()){
      echo "even";
    } else {
      echo "oneven";
    };
     ?>
  </body>
</html>
