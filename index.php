<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 3 partie 4 php</title>
  </head>
  <body>
    <?php
    function returnStringConcat() {
      $text1 = 'Aller salut et merci bien pour le poisson';
      $text2 = '<br/>H2G2 !';
      return $text1.$text2;
    }
    echo returnStringConcat();
    ?>
  </body>
</html>
