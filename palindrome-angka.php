<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindrome</title>
  </head>
  <body>
    <h1>Palindrome Angka</h1>

    <?php

      function palindrome_angka($angka) {
        // tulis kode di sini
        $result = '';
        $reverse = '';
        $value = strval($angka);
        for ( $i = strlen($value) - 1; $i >= 0 ; $i-- ) {
          $reverse .= $value[$i];
        }
        if ( $reverse == $value ) {
          $angka += 1;
        }

        while (true) {
          $value = strval($angka);
          $reverse = '';
          for ( $i = strlen($value) - 1; $i >= 0 ; $i-- ) {
            $reverse .= $value[$i];
          }

          if ( $reverse == $value ) {
            global $result;
            $result = $value . '<br>';
            return $result;
          } else {
            $angka += 1;
          }
        }

      }

      // TEST CASES
      echo palindrome_angka(8); // 9
      echo palindrome_angka(10); // 11
      echo palindrome_angka(117); // 121
      echo palindrome_angka(175); // 181
      echo palindrome_angka(1000); // 1001
    ?>

  </body>
</html>
