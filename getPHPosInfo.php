<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    echo php_uname();
    echo PHP_OS;
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        echo 'This is a server using Windows!';
    } else {
        echo 'This is a server not using Windows!';
    }

    ?>

  </body>
</html>
