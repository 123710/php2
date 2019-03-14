<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // echo php_uname();
    // echo PHP_OS;
    // if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    //     echo 'This is a server using Windows!';
    // } else {
    //     echo 'This is a server not using Windows!';
    // }

    function getPHPosinfo(){
      return php_uname('a');
    }

    echo getPHPosinfo();

    echo "<br><br><br>";

    echo PHP_OS;

    echo "<br><br><br>";

    echo DIRECTORY_SEPARATOR;


    ?>

  </body>
</html>
