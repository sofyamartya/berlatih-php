<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Menentukan Deret Geometri</h1>
    <?php
    function tentukan_deret_geometri($arr) {
      $ratio = $arr[1]/$arr[0];
      if ( sizeof($arr) <= 1) {
        return true;
      }

      for ( $i = 1; $i < sizeof($arr); $i++) {
        if ( ( $arr[$i]/$arr[$i-1] ) != $ratio ) {
          return "false <br>";
        }
      }
      return "true <br>";
    }
    //TEST CASES
    echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
    echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
    echo tentukan_deret_geometri([2, 4, 6, 8]); // false
    echo tentukan_deret_geometri([2, 6, 18, 54]); // true
    echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
    ?>

  </body>
</html>
