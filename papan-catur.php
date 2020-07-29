<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papan Catur</title>
  </head>
  <body>
    <?php
        function papan_catur($angka) {
          // tulis kode di sini
          for ($i=1; $i <= count($angka) ; $i++) {

          }
        }

        // TEST CASES
        echo papan_catur(4)
        /*
        # # # #
         # # #
        # # # #
         # # #
        */

        echo papan_catur(8)
        /*
        # # # # # # # #
         # # # # # # #
        # # # # # # # #
         # # # # # # #
        # # # # # # # #
         # # # # # # #
        # # # # # # # #
         # # # # # # #
        */

        echo papan_catur(5)
        /*
        # # # # #
         # # # #
        # # # # #
         # # # #
        # # # # #
        */
    ?>

  </body>
</html>
