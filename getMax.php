<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
     function getMax($list){
       $max= $list[0];
       for ($i=0; $i < count($list) ; $i++) {
         if($list[$i]> $max) {
           $max = $list[$i];
         }
       }
       return $max;
     }
     $integer = array(2, 66, 54, 107);

     echo getMax($integer);
    ?>
  </body>
</html>
