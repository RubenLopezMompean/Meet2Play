<?php
session_start();
require_once '../Model/ProyectoDB.php';
require_once '../Model/Usuario.php';

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

$conexion = ProyectoDB::connectDB();

$emisor = $_POST['emisor'];

$receptor = $_SESSION['username'];

$asunto = $_POST['asunto'];

$mensaje = $_POST['mensaje'];

$estado = 0;

$consulta = $conexion->query("SELECT * FROM mensaje where receptor =\"$receptor\"");
  $usu = $_SESSION['username'];
  $comando = "SELECT * FROM Usuario WHERE id=$usu";
  $funciona = $conexion->query("SELECT * FROM Usuario WHERE id=\"$usu\"");
  $usuario = $funciona->fetchObject();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">
    <title></title>
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
    <div id="tabs">
      <ul>
        <li><a href="#tabs-1">General</a></li>
        <li><a href="#tabs-2">Mensajes recibidos</a></li>
        <li><a href="#tabs-3">Enviar mensaje</a></li>
        <!--<li><a href="#tabs-5">Rolles favoritos</a></li>-->
      </ul>
      <div id="tabs-1">
        <table class="tabla_cuenta">
          <tr>
            <th>ID:</th>
            <td><?php echo $usuario->id ?></td>
          </tr>
          <tr>
            <th>Nombre:</th>
            <td><?php echo $usuario->nombre ?></td>
          </tr>
          <tr>
            <th>Apellidos:</th>
            <td><?php echo $usuario->apellidos ?></td>
          </tr>
          <tr>
            <th>Correo:</th>
            <td><?php echo $usuario->correo ?></td>
          </tr>
          <tr>
            <th>Dirección:</th>
            <td><?php echo $usuario->direccion ?></td>
          </tr>
          <tr>
            <th>Teléfono:</th>
            <td><?php echo $usuario->telefono ?></td>
          </tr>
        </table>
      </div>
      <div id="tabs-2">
        <div class="mensajeCentrado">
          <?php
          while ($usuario = $consulta->fetchObject()) {
            ?>
            <table class="mens">
              <tr>
                <td class="ref">idmensaje: </td>
                <td class="contenido"><?= $usuario->idmensaje ?></td>
              </tr>
              <tr>
                <td class="ref">Emisor: </td>
                <td class="contenido"><?= $usuario->emisor ?></td>
              </tr>
              <tr>
                <td class="ref">Receptor</td>
                <td class="contenido"><?= $usuario->receptor ?></td>
              </tr>
              <tr>
                <td class="ref">Asunto: </td>
                <td class="contenido"><?= $usuario->asunto ?></td>
              </tr>
              <tr>
                <td class="ref">Mensaje: </td>
                <td class="contenido"><?= $usuario->mensajes ?></td>
              </tr>
            </table>
            <hr>
            <?php
          }
          ?>
        </div>
      </div>
      <div id="tabs-3">
        <div id="mandarMensaje">
          <form method="post" action="../Controller/enviarmensaje.php">

            De: <br>

            <input type="text" name="emisor" style="border-width:0;" readonly="readonly" value="<?= $_SESSION['username'] ?>"> <br>

            Para: <br>

            <input type="text" name="receptor"> <br>

            Asunto: <br>

            <input type="text" name="asunto"> <br>

            Mensaje: <br>
            <textarea name="mensaje" style="width: 300px; height: 125px;"></textarea> <br>

            <input type="submit" value="Enviar" name="envio">

          </form>
        </div>
      </div>
      <!--      <div id="tabs-5">
            </div>-->
    </div>
    <br>
    <?php include_once 'footer.php'; ?>
  </body>
</html>
