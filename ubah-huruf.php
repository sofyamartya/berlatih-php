<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function ubah_huruf($string){
      $result = '';
      for ( $i = 0; $i < strlen($string); $i++) {
        $str = $string[$i];
        $result = ctype_alpha($str[$i + 1]);
      }
      return $result;
    }

    // TEST CASES
    echo ubah_huruf('wow'); // xpx
    echo ubah_huruf('developer'); // efwfmpqfs
    echo ubah_huruf('laravel'); // mbsbwfm
    echo ubah_huruf('keren'); // lfsfo
    echo ubah_huruf('semangat'); // tfnbohbu

    ?>
  </body>
</html>
