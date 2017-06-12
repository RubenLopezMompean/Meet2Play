<?php
session_start();
require_once '../Model/ProyectoDB.php';
require_once '../Model/Usuario.php';
$conexion = ProyectoDB::connectDB();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">

  </head>
  <body>
    <?php
    $usu = $_POST["buscar"];
    $comando = "SELECT * FROM Usuario WHERE id=$usu";
    $funciona = $conexion->query("SELECT * FROM Usuario WHERE id=\"$usu\"");
    $usuario = $funciona->fetchObject();
    ?>

    <?php require_once 'menu.php'; ?> 
    <div class="centrado">
      <?php 
        if(!$usuario){
          echo "Esta ID no existe.";
        } else {
          ?>
      ID: <?php echo $usuario->id ?> <br>
      Nombre: <?php echo $usuario->nombre ?> <br>
      Apellidos: <?php echo $usuario->apellidos ?> <br>
      <div id="mandarMensaje">
        <form method="post" action="../Controller/enviarmensaje.php">

          De: <br>

          <input type="text" name="emisor" style="border-width:0;" readonly="readonly" value="<?= $_SESSION['username'] ?>"> <br>

          Para: <br>

          <input type="text" name="receptor" value="<?= $_POST["buscar"] ?>"> <br>

          Asunto: <br>

          <input type="text" name="asunto"> <br>

          Mensaje: <br>
          <textarea name="mensaje" style="width: 300px; height: 125px;"></textarea> <br>

          <input type="submit" value="Enviar" name="envio">

        </form>
      </div>
        <?php } ?>
    </div>
    <?php include_once 'footer.php'; ?>
  </body>
</html>