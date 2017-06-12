<script>
      $(document).ready(function () {
        $(function () {
          $("#dialog").dialog({
            autoOpen: false
          });
          $("#button").on("click", function () {
            $("#dialog").dialog("open");
          });
        });
// Validating Form Fields.....
        $("#submit").click(function (e) {
          var password = $("#password").val();
          var username = $("#username").val();
          if (password === '' || username === '') {
            alert("Rellene los campos");
            e.preventDefault();
          }
        });
      });
    </script>
  <img class="imgLogo" src="./images/m2p.svg"><!--width:742px; height:415px;-->
<h1 class="login">Meet2Play</h1>
<div id="nombreLogin">
  <?php
  if (!$_SESSION['username']) {
    ?>

    <div id="dialog" title="Login">
      <form action="../Controller/checklogin.php" method="post">
        <label>Usuario:</label>
        <input id="username" name="username" type="text">
        <label>Password:</label>
        <input id="password" name="password" type="password">
        <input id="submit" type="submit" value="Submit">
        <a class="usuarioNuevo" href=registrar.php>Nuevo usuario</a>
      </form>
    </div>
    <input id="button" type="button" value="Login">
    <br>
    <?php
  } else {
    ?>
    <p>Estás logeado como <?php echo $_SESSION['username']; ?></p>
  <?php } ?>
  <form action="./action_buscar.php" method="post">
    <input type="search" placeholder="Buscar usuario" name="buscar" id="buscar">
    <input type="submit" hidden>
    <?php
    if ($_SESSION['username']) {
      ?>
      <a href=../Controller/logout.php>Cerrar Sesion</a>
    <?php } ?>
  </form>
</div>
<br><br>  
<div style="clear:left;">
  <?php
  if ($_SESSION['administrador'] == true) {
    ?>      
    <ul class='menu'>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="carrusel.php">Media</a></li>
      <li><a href="../foro/index.php">Foro</a></li>
      <li><a href="./chat/index.php">Chat</a></li>
        <?php
        if(!$_SESSION['username']){
          ?>
        <li><a href="cuenta.php" style=" pointer-events: none; cursor: default;">Mi cuenta</a></li>
        <?php
        } else {
        ?>
        <li><a href="cuenta.php">Mi cuenta</a></li>
        <?php
        }
        ?>
      <li><a href="bbdd.php">Admnistrar usuarios</a></li>
      <li><a href="mensajeBD.php">Administrar mensajes</a></li>
    </ul>
    <?php
  } else {
    ?>
  <ul class='menu'>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="carrusel.php">Media</a></li>
    <li><a href="../foro/index.php">Foro</a></li>
    <li><a href="./chat/index.php">Chat</a></li>
        <?php
        if(!$_SESSION['username']){
          ?>
        <li><a href="cuenta.php" style=" pointer-events: none; cursor: default;">Mi cuenta</a></li>
        <?php
        } else {
        ?>
        <li><a href="cuenta.php">Mi cuenta</a></li>
        <?php
        }
        ?>
  </ul>
</div>

  <?php
}
?>
<br>
