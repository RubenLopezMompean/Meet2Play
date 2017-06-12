<?php
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
    <script>
    $(document).ready(function(){
        //AUTOCOMPLETADO
        $(document).on("keypress keyup", "#buscausuario", function () {
          var valor = $("#buscausuario").val();
          $.get("tabla.php",
                  {
                    busquedausuario: valor
                  },
                  function (data) {
                    //vuelve a pintar el listado
                    $("#contenedor").html(data);
                  });//get

        });
                                                                   
});
    </script>
  </head>
  <body>
    <form action="./action_buscar.php" method="post">
      Search Google:
      <input type="search" name="buscar" id="buscar">
      <input type="submit" hidden>
    </form>
 

  </body>
</html>
