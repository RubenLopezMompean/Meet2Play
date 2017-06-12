<?php
session_start();
require_once '../Model/ProyectoDB.php';
require_once '../Model/Usuario.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
} else {
  require_once 'estilos_y_js.php';
}

$now = time();

if ($now > $_SESSION['expire']) {
  session_destroy();

  echo "Su sesion a terminado,
  <a href='index.php'>Necesita Hacer Login</a>";
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./js/js.js"></script>
    <title>Quienes somos</title>
    <script>
      $(function () {
        $("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
        $("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");
      });
    </script>
    <style>
      .ui-tabs-vertical { width: 55em; }
      .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
      .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
      .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
      .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
      .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
    </style>
  </head>
  <body>
    <?php require_once 'menu.php'; ?> 
    <div class="medio">
      <p>
        Mi nombre es <b>Rubén</b>, y soy el creador de <b>Meet2Play</b>.</p>
      <p>
        La intención es crear un sitio para
        que tanto los jugadores habituales como los eventuales tengan un lugar en el que conocer/contactar
        con gente similar para jugar a sus juegos favoritos.
      </p>
      <p>
        Así los jugadores que normalmente juegan solos y quieren jugar con otros,tienen una opción 
        de encontrar a otros jugadores. 
      </p>
      <p>
        Otros de los motivos es poner en contacto los usuarios para que puedan montar
        sus propios equipos de competición. Estamos abiertos a nuevas ideas, así que 
        si se te ocurre algo para mejorar no dudes en contactar conmigo o cualquier otro administrador.
      </p>
    </div>
    <section class="container">
      <div id="carousel">
        <img src="images/cod.jpg">
        <img src="images/battlefield.jpg">
        <img src="images/diablo3.jpg">
        <img src="images/fifa.jpg">
        <img src="images/lol.png">
        <img src="images/overwatch.jpg">
        <img src="images/cs.jpg">
        <img src="images/sc.jpg">
        <img src="images/hs.jpg">
      </div>
    </section>
    <!--Realiza el movimiento manual, desactivar movimiento automatico de style.css-->
<!--    <section id='options'>
      <p id='navigation'>
        <button id='previous' data-increment="1">Previous</button>
        <button id="next" data-increment="-1">Next</button>
      </p>
    </section>-->
    <script> init(); </script>
    <?php include_once 'footer.php'; ?>
  </body>
</html>
