<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">
    <link rel="icon" type="image/svg" href="./images/m2p.svg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
  </head>
  <body>
    <?php require_once 'menu.php'; ?> 
    <div class="body">
      <p class="inicio">Bienvenidos a Meet2Play, un lugar donde buscar gente con la qué jugar a tus juegos favoritos.</p>
      <br>
      <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/overwatch.jpg" alt="Overwatch" width="40%" height="40%">
            </div>

            <div class="item">
              <img src="images/cod.jpg" alt="CoD" width="40%" height="40%">
            </div>

            <div class="item">
              <img src="images/lol.png" alt="LoL" width="40%" height="40%">
            </div>

            <div class="item">
              <img src="images/fifa.jpg" alt="Fifa" width="40%" height="40%">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <br>
      <p class='inicio'><a href='registrar.php'>Registrese</a> ahora para pertenecer a esta comunidad.</p>
    </div>
    <?php require_once "footer.php" ?>
  </body>
</html>
