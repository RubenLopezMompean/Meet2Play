<?php
session_start();
$_SESSION['name'] = $_SESSION['username'];

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
} else {
  echo "Esta pagina es solo para usuarios registrados.<br>";
  echo "<br><a href='../index.php'>Login</a>";
  echo "<br><br><a href='../registrar.php'>Registrarme</a>";

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
    <title>Chat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/cssproyect.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.css"/>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <script language="javascript" type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    
  </head>
  <script>
    
    $(document).ready(function () {
      $("#submitmsg").click(function () {
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});
        $("#usermsg").attr("value", "");
        return false;
      });

      //Carga el archivo que contiene el log de chat
      function loadLog() {
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //La altura del scroll antes de la petición
//var oldscrollHeight = $("#chatbox").attr("scrollHeight") – 20;
        $.ajax({
          url: "log.html",
          cache: false,
          success: function (html) {
            $("#chatbox").html(html); //Inserta el log de chat en el div #chatbox
            //Auto-scroll
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //La altura del scroll después del pedido
            if (newscrollHeight > oldscrollHeight) {
              $("#chatbox").animate({scrollTop: newscrollHeight}, 'normal'); //Autoscroll hacia el fondo del div
            }
          }
        });

      }
      setInterval(loadLog, 1500);    //Recarga el archivo cada 1500 ms o x ms si deseas cambiar el segundo parámetro
      $(function () {
        $("#dialog").dialog({
          autoOpen: false
        });
        $("#button").on("click", function () {
          $("#dialog").dialog("open");
        });
      });
// Validar campos de registro
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
  <body>
    <?php require_once 'menu.php'; ?> 
    <div id="wrapper">
      <div id="menu">
        <p class="welcome">Usuario: <b><?php echo $_SESSION['name']; ?></b></p>
        <div style="clear:both"></div>
      </div>
      <div id="chatbox"><?php
        if (file_exists("log.html") && filesize("log.html") > 0) {
          $handle = fopen("log.html", "r");
          $contents = fread($handle, filesize("log.html"));
          fclose($handle);

          echo $contents;
        }
        ?></div>

      <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
      </form>
    </div>

    <?php
    if (isset($_GET['logout'])) {
      $fp = fopen("log.html", 'a');
      fwrite($fp, "<div class='msgln'><i>User " . $_SESSION['name'] . " has left the chat session.</i><br></div>");
      fclose($fp);

      session_destroy();
      header("Location: index.php"); //Redirige al usuario
    }
    ?>
    <footer>
      <ul class='menuF'>
        <li><a id="abrirNosotros" href="../quienessomos.php">Conócenos</a></li>
        <li><a id="abrirContacto" href="#">Contacto</a></li>
        <li><a href="../index.php"><img src="../images/m2p.svg" style="width:74.2px;height:41.5px;"></a></li>
        <li><a id="abrirTerminos" href="#">Términos</a></li>
        <li><a id="abrirPrivacidad" href="#">Privacidad</a></li>
      </ul>
      <ul class='fin'>
        <a href="https://twitter.com/?lang=es"><li id='twitter'></li></a>
        <a href="https://es-es.facebook.com/"><li id='facebook'></li></a>
        <a href="https://plus.google.com/?hl=es"><li id='google'></li></a>
        <a href="https://www.youtube.com/?hl=es&gl=ES"><li id='youtube'></li></a>
        <a href="https://es.linkedin.com/"><li id='linkedin'></li></a>
      </ul>
      &copy;2017
    </footer>
  </body>
</html>