<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasangan Terbesar</title>
  </head>
  <h1>Pasangan Terbesar</h1>
  <body>
    <?php
      function pasangan_terbesar($angka){
        $b_num = substr( $angka, 0, 2);
        for ($i=0; $i <= strlen($angka) - 2; $i++) {
          $pair_num = substr($angka, $i, 2);
          if ($pair_num > $b_num) {
            $b_num = $pair_num . '<br>';
          }
        }
        return $b_num;
      }

      // TEST CASES
      echo pasangan_terbesar(641573); // 73
      echo pasangan_terbesar(12783456); // 83
      echo pasangan_terbesar(910233); // 91
      echo pasangan_terbesar(71856421); // 85
      echo pasangan_terbesar(79918293); // 99

      ?>

  </body>
</html>
