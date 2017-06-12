<?php
  require_once '../Model/Imagenes.php';
  $imagenAux = new Imagenes($_GET['imagen_id']);
  $imagenAux->update();
  header("Location: ../View/cuenta.php");