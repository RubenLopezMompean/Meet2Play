<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="./css/cssproyect.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="./jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    
    <script>
    $( function() {
      $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
      });
    } );
  </script>
    <style>
      span.columna{
        display:table-row;
      }
      p.linea{
        display:table-cell;
      }
      .error{
        color:red;
        font-weight: bold;
      }
      p.mid{
        margin-left:160px;
      }
    </style>
  </head>
  <body>
    <?php require_once 'menu.php'; ?> 
    <div class='tablacentrada'>
      <h2 class="centrado">Registrar</h2>
      <form  id="validar" action="../Controller/alta.php" method="post" novalidate>
        <span class="columna">
          <p class="linea"><label>ID:*</label></p>
          <p class="linea"><input name="username" type="text" id="username"></p>
        </span>
        <span class="columna">
          <p class="linea"><label>Password:*</label></p>
          <p class="linea"><input name="password" type="password" id="password"></p>
        </span>
        <span class="columna">
          <p class="linea"><label>Repite password:*</label></p>
          <p class="linea"><input name="confirm_password" type="password" id="confirm_password"></p>
        </span>
        <span class="columna">
          <p class="linea"><label>Nombre:*</label></</p>
          <p class="linea"><input name="nombre" type="text" id="nombre"></p>
        </span>
        <span class="columna">
          <p class="linea"><label>Apellidos:*</label></p>
          <p class="linea"><input name="apellidos" type="text" id="apellidos"></p>
        </span>
        <span class="columna">
          <p class="linea"><label>Email:*</label></p>
          <p class="linea"><input name="email" type="email" id="email"></p>
        </span>
        <p class="linea"><label>Fecha nacimiento:</label></p>
        <p class="linea"><input type="text" id="datepicker"></p>
        <br>
        <p class="mid"><input type="submit" name="enviar" value="ENVIAR"></p>
       
      </form>
      
      <script>

        $("#validar").validate({
          rules: {
            username: {
              required: true,
              minlength: 3
            },
            password: {
              required: true,
              minlength: 5
            },
            confirm_password: {
              required: true,
              minlength: 5,
              equalTo: "#password"
            },
            nombre: "required",
            apellidos: "required",
            email: {
              required: true,
              email: true
            }
          },
          messages: {
            username: {
              required: "<br>Por favor, introduce un ID",
              minlength: "<br>Tu ID tiene que tener al menos 3 caracteres"
            },
            password: {
              required: "<br>Por favor, introduce una contraseña",
              minlength: "<br>Tu contraseña tiene que tener al menos 5 caracteres"
            },
            confirm_password: {
              required: "<br>Por favor, introduce una contraseña",
              minlength: "<br>Tu contraseña tiene que tener al menos 5 caracteres",
              equalTo: "<br>Tu contraseña no coincide"
            },
            nombre: "<br>Introduce su nombre",
            apellidos: "<br>Introduce sus apellidos",
            email: {
              required: "<br>Por favor, introduce un email",
              email: "<br>Por faor, introduce un email válido"
            }
          }
        });
        
      </script>
      <h4 class="centrado"><a href='index.php'>Volver</a></h4>
    </div>
    <?php include_once 'footer.php'; ?>
  </body>
</html>
