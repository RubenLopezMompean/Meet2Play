<?php
require_once '../Model/ProyectoDB.php';
require_once '../Model/Usuario.php';
$conexion = ProyectoDB::connectDB();
?>

<tr id="filanueva" align="center">
  <td>
    <input  placeholder="Id" type="text" id="idnuevo" value="">
  </td>
  <td>
    <input  placeholder="Password" type="text" id="passwordnuevo" value="">
  </td>
  <td>
    <input  placeholder="Nombre" type="text" id="nombrenuevo" value="">
  </td>
  <td>
    <input placeholder="Apellidos" id="apellidosnuevo">
  </td>
  <td>
    <input placeholder="Correo" id="correonuevo">
  </td>
  <td>
    <input  placeholder="Tipousuario" type="text" id="tipousuarionuevo" value="">
  </td>

  <td>
    <img id="guardarnuevo" src="img/floppy.png" width="20" height="20" alt="Guardar">
    &nbsp;&nbsp;
    <img id="cancelarnuevo" src="img/borrar.png" width="20" height="20" alt="Cancelar">

  </td>
</tr>

