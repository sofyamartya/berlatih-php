<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function skor_terbesar($arr){
      $result = [];
      $laravel = [];
      $reactNative = [];
      $reactJs = [];
      foreach ($arr as $key => $value) {
        $score[$key] = $value['nilai'];
        $class[$key] = $value['kelas'];
      }

      array_multisort($class, SORT_DESC, $score, SORT_DESC, $arr);

      for ( $i = 0; $i < count($arr); $i++) {
        if ( $arr[$i]['kelas'] == 'Laravel' ) {
          $laravel[] = $arr[$i];
        } elseif ( $arr[$i]['kelas'] == 'React Native' ) {
          $reactNative[] = $arr[$i];
        } elseif ( $arr[$i]['kelas'] == 'React JS' ) {
          $reactJs[] = $arr[$i];
        }
      }

      $result[] = $laravel[0];
      $result[] = $reactNative[0];
      $result[] = $reactJs[0];

      foreach ($result as $key => $l_result) {
        $data[] = array('nama' => $l_result, 'kelas' => $l_result, 'nilai' => $l_result);
      }

      echo "<pre>"; print_r($data); echo "</pre>";
    }

    // TEST CASES
    $skor = [
      [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
      ],
      [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
      ],
      [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
      ],
      [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
      ],
      [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
      ],
    ];

    print_r(skor_terbesar($skor));
    /* OUTPUT
    Array (
      [Laravel] => Array
                (
                  [nama] => Aghnat
                  [kelas] => Laravel
                  [nilai] => 90
                  )
      [React Native] => Array
                (
                  [nama] => Regi
                  [kelas] => React Native
                  [nilai] => 86
                )
      [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
          )
          */


        ?>
  </body>
</html>
