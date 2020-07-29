<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Menentukan Deret Aritmetika</h1>
    <?php
    function tentukan_deret_aritmatika($arr) {
      $difference = $arr[1]-$arr[0];
      if ( sizeof($arr) <= 1 ) {
        return true;
      }

      for ( $i = 1; $i < sizeof($arr); $i++) {
        if ( ($arr[$i] - $arr[$i-1]) != $difference ) {
          return "false <br>";
        }
      }
      return "true <br>";
    }

    // TEST CASES
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
    echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
    echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
    echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
    ?>

  </body>
</html>
