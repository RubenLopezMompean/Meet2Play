<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
} else {
  echo "Esta pagina es solo para usuarios registrados.<br>";
  echo "<br><a href='index.php'>Login</a>";
  echo "<br><br><a href='registrar.php'>Registrarme</a>";

  exit;
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
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Carousel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <script src="./js/js.js"></script>
  </head>
  <body>
    <?php require_once 'menu.php'; ?> 
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
