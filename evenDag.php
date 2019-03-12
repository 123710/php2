<!DOCTYPE html>
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
        echo " het is een even getal";
    }
        else {
          echo " het is een oneven getal";

      }
    }
    evendag();
     ?>
  </body>
</html>
