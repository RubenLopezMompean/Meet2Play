<?php
session_start();
require_once '../Model/ProyectoDB.php';
require_once '../Model/Usuario.php';
$conexion = ProyectoDB::connectDB();

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
  $usu = $_SESSION['username'];
  $comando = "SELECT * FROM Usuario WHERE id=$usu";
  $funciona = $conexion->query("SELECT * FROM Usuario WHERE id=\"$usu\"");
  $usuario = $funciona->fetchObject();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">
    <script language="javascript" type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <title>Perfil</title>
  </head>
  <body>
    <?php require_once 'menu.php'; ?> 
    <div>
      <h2>EN CONSTRUCCION</h2>
      ID: <?php echo $usuario->id ?> <br>
      Nombre: <?php echo $usuario->nombre ?> <br>
      Apellidos: <?php echo $usuario->apellidos ?> <br>
      Correo: <?php echo $usuario->correo ?> <br>
      Dirección: <?php echo $usuario->direccion ?> <br>
      Teléfono: <?php echo $usuario->telefono ?> <br>
       
    </div>
    <?php include_once 'footer.php'; ?>
  </body>
</html>