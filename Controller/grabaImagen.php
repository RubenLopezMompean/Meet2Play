<?php
  require_once '../Model/Imagenes.php';

  // sube la imagen al servidor
  move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/images/" . $_FILES["imagen"]["name"]);

  // inserta la oferta en la base de datos
  $imagenAux = new Imagenes("", $_FILES["imagen"]["name"], $_POST["usuario_id"]);
  $imagenAux->insert();
  header("Location: index.php");