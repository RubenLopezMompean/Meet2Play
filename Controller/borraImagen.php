<?php
  require_once '../Model/Imagenes.php';
  $imagenAux = new Imagenes($_GET['imagen_id']);
  $imagenAux->delete();
  header("Location: index.php");