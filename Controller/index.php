<?php

session_start();
$username = "123";
$_SESSION['username'] = $username;

  require_once '../Model/Imagenes.php';

  // Obtiene todas las ofertas
  $data['images'] = Imagenes::getImages();

  // Carga la vista de listado
  include '../View/listado.php';