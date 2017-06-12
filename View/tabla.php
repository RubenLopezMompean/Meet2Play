<?php
require_once '../Model/ProyectoDB.php';
require_once '../Model/Usuario.php';
$conexion = ProyectoDB::connectDB();

if (!empty($_POST["idusuario"]) && empty($_POST["id"]))
  sleep(1);

//Consulta general del listado de usuarios
$consulta = $conexion->query("SELECT * FROM Usuario");

//Ordena por click en los th
if (empty($_POST["ordenapor"])) {
  $consulta = $conexion->query("SELECT * FROM Usuario ORDER BY id");
} else {
  sleep(1); //simula retraso de 1 seg en servidor
  $ordena = "";

  if ($_POST["ordenapor"] == "nombre") {
    $ordena = "nombre";
  } else if ($_POST["ordenapor"] == "apellidos") {
    $ordena = "apellidos";
  } else {
    $ordena = "correo";
  }
  $consulta = $conexion->query("SELECT * FROM Usuario ORDER BY $ordena");
}
//---------------------------------------------------------------------------

//Constante con el número de regitros por página:
$numregxpagina = 5;
$paginaactual = 1;

//En caso de que no me llegen parámetros de paginación
//Inicializamos valores de la paginación como página 1
if (empty($_GET["page"]) || ($_GET["page"] == 1)) {
  $regcomienzo = 0;
} else {
  $regcomienzo = (($_GET["page"] - 1) * $numregxpagina);
  $paginaactual = $_GET["page"];
}
//-----------------------------------------------------------------------

if (!empty($_POST["idusuario"]) && empty($_POST["id"]))
  sleep(1);

//Consulta general del listado de usuarios

$listado = "SELECT * FROM Usuario ";
//Ordena por click en los th
if (empty($_POST["ordenapor"])) {
  $listado .= "ORDER BY id";
} else {
  sleep(1); //simula retraso de 1 seg en servidor
  $ordena = "";

  if ($_POST["ordenapor"] == "nombre") {
    $ordena = "nombre";
  } else if ($_POST["ordenapor"] == "apellidos") {
    $ordena = "apellidos";
  } else {
    $ordena = "correo";
  }
  $listado .="order by $ordena";
}
//---------------------------------------------------------------------------
//Filtra por input
//Consulta en función de dirección
if (!empty($_GET["busquedausuario"])) {
  $listado = ("
    SELECT *
    FROM Usuario
    WHERE id LIKE '%" . $_GET["busquedausuario"] . "%' ");
}

//Si llega el parametro ordenapor se ordena por ese campo
if (!empty($_POST["id"])) {
  sleep(1); //simula retraso de 1 seg en servidor
  $listado = ("SELECT * FROM Usuario WHERE id='" . $_POST["id"] . "'");
}


  $limit = " LIMIT " . $regcomienzo . "," . $numregxpagina;
  $resultado = $conexion->query($listado . $limit);

//---------------------------------------------------------------------------

  ?>

  <table id="tabladatos" class="table table-hover">
    <tr>
      <th class="ordena centrado" name="id">ID</th>
      <th class="ordena centrado" name="nombre">Nombre</th>
      <th class="ordena centrado" name="apellidos">Apellidos</th>
      <th class="ordena centrado" name="correo">Correo</th>
      <th class="col-xs-12 col-sm-12 col-md-2"></th>
      <th class="col-xs-12 col-sm-12 col-md-2"></th>
      <th class="col-xs-12 col-sm-12 col-md-2"></th>
    </tr>
    <?php
    while ($usuario = $resultado->fetchObject()) {   // Si se cambia $consulta por $resultado hace bien la paginacion pero no realiza la ordenacion ni filtrado
      ?>
      <tr id="id_<?= $usuario->id ?>" align="center" data-id="<?php echo $usuario->id ?>">
        <td class="id"><?php echo $usuario->id ?></td>
        <td class="password"hidden><?php echo $usuario->password ?></td>
        <td class="nombre"><?php echo $usuario->nombre ?></td>
        <td class="apellidos"><?php echo $usuario->apellidos ?></td>
        <td class="correo"><?php echo $usuario->correo ?></td>
        <td class="direccion"hidden><?php echo $usuario->direccion ?></td>
        <td class="telefono"hidden><?php echo $usuario->telefono ?></td>

        <td>
          <button class="borrar" alt="Borrar">Borrar</button>
        </td>
        <td>
          <button class="modificar" alt="Modificar">Modificar</button>
        </td>
        <td class="col-xs-12 col-sm-12 col-md-2"></td>
      </tr>
      <?php
    }//while
  ?>
</table>

<style>
  ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
  }

  ul.pagination li {display: inline;}

  ul.pagination li a {
    color:black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
  }
  .actual{
    color:red !important;
  }
</style>

<ul class="pagination">
  <?php if ($paginaactual != 1) { ?>  
    <li><a href="#" data-page="1">Primero</a></li>
    <li><a href="#" data-page="<?php echo ($paginaactual - 1) ?>"><<</a></li>
  <?php }
  ?>
  <?php
//Cuantas páginas
  $resultado2 = $conexion->query($listado);
  $totalregistros = $resultado2->rowCount();
  $numpaginas = intval($totalregistros / $numregxpagina) + 1;
  for ($i = 1; $i <= $numpaginas; $i++) {
    ?>  
    <li><a href="#" data-page="<?php echo $i ?>" 
           <?php if ($i == $paginaactual) { ?> class="actual" <?php } ?>
           ><?php echo $i ?></a></li>
    <?php } ?>
    <?php if ($paginaactual != $numpaginas) { ?>
    <li><a href="#" data-page="<?php echo ($paginaactual + 1) ?>">>></a></li>
    <li><a href="#" data-page="<?php echo $numpaginas ?>">Ultimo</a></li>
  <?php } ?>
</ul>
