<?php
  $finally = 200;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8/3</title>
  </head>
  <body>
    <p>
      <?php
        while ($finally > 0) {
          $finally = $finally - 12;
          echo 'Enfin !!!! ';
        }
      ?>
    </p>
  </body>
</html>
