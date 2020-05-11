<?php
$numbers = 0; //point de départ 0
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex5 partie4 php</title>
</head>
<body>
  <?php //1ere version
  while ($numbers <= 300){ // point d'arrivée 300
    //incrémentation ++ (ajoute) la variable number sinon boucle infinie
    $numbers ++;
    $oddnumbers = $numbers % 2;
    if ($oddnumbers !=0){
      ?>
      <p><?php echo $numbers; ?></p>}
      //<?php
    }
  }
  // 2e version
  for ($numbers = 0; $numbers <= 300; $numbers ++;){
    $oddnumbers = $numbers % 2;
    if ($oddnumbers != 0){
      ?>
      <p><?php echo $numbers;?></p>}
      ?php }
    }
    ?>
  </body>
  </html>
