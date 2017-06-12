<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Listado de imagenes</title>
  </head>
  <body>
    <a href="../Controller/nuevaImagen.php">Nueva imagen</a>
    <a href="../View/perfil.php">Perfil</a>
  <p>Estás logeado como <?php echo $_SESSION['username']; ?></p>
    <hr>
    <?php
      foreach($data['images'] as $imagen)  {
      ?>
        <h3><?=$imagen->getImagen()?></h3>
        <img src="../View/images/<?=$imagen->getImagen()?>" width="400"><br>
        <a href="../Controller/borraImagen.php?imagen_id=<?=$imagen->getImagenId()?>">Borrar</a>
      <?php
      }
    ?>
  </body>
</html>
