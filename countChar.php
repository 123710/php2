<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //$text= "Bashar";
    //echo substr_count($text,'a');
      $aantaalKeer= countChar("bashar","a");
      echo "het antwoord is $aantaalKeer";
      function countChar($text,$toSearch){
        $aantal= 0;
        for ($i=0; $i < strlen($text); $i++) {
          if(substr($text, $i, 1) == $toSearch){
            $aantal++;
          }
          // $aantal= substr_count($text,"a");
        }
        return $aantal;
      }
     ?>
  </body>
</html>
