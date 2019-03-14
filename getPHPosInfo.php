<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function getPHPosinfo(){
      return php_uname('a');
    }
    echo getPHPosinfo();
    ?>
  </body>
</html>
