<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 3 partie 6 php</title>
  </head>
  <body>
    <a href="index.php?dateDebut=2/05/2016&amp;dateFin=27/11/2016">Dates</a>
    <?php
    if (isset($_GET['dateDebut']) && ($_GET['dateFin'])) {
    echo $_GET['dateDebut'] .' '. $_GET['dateFin'];
  } else {
    echo 'Cliquez sur le lien pour afficher les dates !';
  };
    ?>
  </body>
</html>
