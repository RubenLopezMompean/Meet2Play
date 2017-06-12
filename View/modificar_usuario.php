
<form id="formulario" method="post">
  <input type="hidden" id="idmodificar">
  Password:<br><input type="password" id="passwordmodificar" name="passwordmodificar"><br>
  Nombre:<br><input type="text" id="nombremodificar" name="nombremodificar"><br>
  Apellidos:<br><input id="apellidosmodificar" name="apellidosmodificar"><br>
  Correo:<br><input id="correomodificar" name="correomodificar"><br>
  Direccion:<br><input id="direccionmodificar" name="direccionmodificar"><br>
  Telefono:<br><input id="telefonomodificar" name="telefonomodificar"><br>
  <br>
       
</form>
<!--
<script>
  $("#formulario").validate({
    rules: {
            passwordmodificar: {
              required: true,
              minlength: 5
            },
            nombremodificar: "required",
            apellidosmodificar: "required",
            correomodificar: {
              required: true,
              email: true
            }
          },
          messages: {
            passwordmodificar: {
              required: "<br>Por favor, introduce una contraseña",
              minlength: "<br>Tu contraseña tiene que tener al menos 5 caracteres"
            },
            nombremodificar: "<br>Introduce su nombre",
            apellidosmodificar: "<br>Introduce sus apellidos",
            correomodificar: {
              required: "<br>Por favor, introduce un email",
              email: "<br>Por favor, introduce un email válido"
            }
          }
        });

</script>-->