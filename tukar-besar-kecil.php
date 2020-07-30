<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Menukar huruf besar dan kecil</h1>
    <?php
    function tukar_besar_kecil($string){
      $result = "";
      for ($i=0; $i < strlen($string); $i++) {
        $str = $string[$i];
        if (ctype_alpha($str) && $str == strtolower($str)) {
          $result .= strtoupper($str);
        } elseif (ctype_alpha($str) && $str == strtoupper($str)) {
          $result .= strtolower($str);
        } else {
          $result .= $string[$i];
        }
      }
      return $result . "<br>";
    }

    // TEST CASES
    echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
    echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
    echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
    echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
    echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
  </body>
</html>
