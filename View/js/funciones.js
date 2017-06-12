$(document).ready(function () {
        var ordenapor;
        var id;
        var idtipo;
        var ordenadelth;

        //VENTANA DIALOGO DE BORRAR
        $("#dialogoborrar").dialog({
          autoOpen: false,
          resizable: false,
          modal: true,
          buttons: {
            "Borrar": function () {
              $.get("../Controller/eliminar.php", {id: id}, function () {
                $("#id_" + id).fadeOut(1000);
              });


              //get			
              //cierra ventana dialogo				
              $(this).dialog("close");
            },
            "Cancelar": function () {
              $(this).dialog("close");
            }
          }//buttons
        });
        //---------------------------------------------
        //BORRAR
        $(document).on("click", ".borrar", function () {
          id = $(this).parents("tr").data("id");
          $("#dialogoborrar").dialog("open");

        });

        //---------------------------------------------------
        //MODIFICAR
        $("#dialogomodificar").dialog({
          autoOpen: false,
          resizable: false,
          modal: true,
          buttons: {
            "Guardar": function () {
              $.post("../Controller/modificado.php", {
                idmodificar: id,
                passwordmodificar: $("#passwordmodificar").val(),
                nombremodificar: $("#nombremodificar").val(),
                apellidosmodificar: $("#apellidosmodificar").val(),
                correomodificar: $("#correomodificar").val(),
                direccionmodificar: $("#direccionmodificar").val(),
                telefonomodificar: $("#telefonomodificar").val()
              }, function (data, status) {
                $("#contenedor").html(data);
              });//get			

              $(this).dialog("close");
            },
            "Cancelar": function () {
              $(this).dialog("close");
            }
          }//buttons
        });

        //Boton Modificar	
        $(document).on("click", ".modificar", function () {
          //Obtenemos el id de la fila
          id = $(this).parents("tr").data("id");
          //Para que ponga el campo direccion con su valor

          $("#passwordmodificar").val($(this).parent().siblings("td.password").html());

          $("#nombremodificar").val($(this).parent().siblings("td.nombre").html());

          $("#apellidosmodificar").val($(this).parent().siblings("td.apellidos").html());

          $("#correomodificar").val($(this).parent().siblings("td.correo").html());

          $("#direccionmodificar").val($(this).parent().siblings("td.direccion").html());

          $("#telefonomodificar").val($(this).parent().siblings("td.telefono").html());


          //Muestro el dialogo
          $("#dialogomodificar").dialog("open");

        });

        //Filtrado por click
        //-------------------------------------------------------

        $(document).on("click", ".ordena", function () {

          //obtener el ordenapor
          ordenadelth = $(this).attr("name");

          $.ajax({
            url: "tabla.php",
            data: {ordenapor: ordenadelth},
            type: "post",
            beforeSend: ordenar,
            success: rellenar,
            complete: final,
            cache: false
          });
        });

        //Se ejecuta en el tiempo de espera del servidor
        function ordenar() {
          //Muestra el gráfico de cargar
          var cargando = '<span><img src="images/loader.gif" id="cargando" /></span>';

          $("#contenedor").html(cargando);
        }

        function rellenar(data) {
          $("#contenedor").html(data);
        }

        //Una vez cargado vuelve a ocultar el gif animado			
        function final() {
          $("#cargando").hide();
        }

        $("#fechanac").datepicker({
          dateFormat: "dd/mm/yy"
        });

        //Filtrado por input

        //----------------------------------------------------
        //AUTOCOMPLETADO
        $(document).on("keypress keyup", "#buscausuario", function () {
          var valor = $("#buscausuario").val();
          $.get("tabla.php",
                  {
                    busquedausuario: valor
                  },
                  function (data) {
                    //vuelve a pintar el listado
                    $("#contenedor").html(data);
                  });//get

        });
        // FILTRAR				
        $(document).on("click", "#filtrar", function () {		//Cargo en la vble global el tipo seleccionado			
          idtipo = $("#idtipo").val();
          //Llamo Ajax con la función ajax
          $.ajax({
            url: "tabla.php",
            data: {id: idtipo},
            type: "POST",
            beforeSend: cargar,
            success: filtratabla,
            complete: fin,
            cache: false
          });//ajax														

        });

        //Se ejecuta en el tiempo de espera del servidor
        function cargar() {
          //Muestra el gráfico de cargar
          var cargando = '<span><img src="img/ajax-loader.gif" id="cargando" /></span>';

          $("#cabeza").html(cargando);
        }

        //Cargar en el contenedor el resultado de la tabla con filtro				
        function filtratabla(data) {
          $("#contenedor").html(data);
        }

        //Una vez cargado vuelve a ocultar el gif animado			
        function fin() {
          $("#cargando").hide();
        }

        //---- NUEVO --------------
        //Boton de nuevo usuario 
        //Crea nueva fila al final de la tabla
        //Con dos nuevos botones (guardarnuevo y cancelarnuevo)
        $(document).on("click", "#nuevo", function () {
          $.post("usuario_formulario_nuevo.php", function (data) {
            //Añade a la tabla de datos una nueva fila
            $("#tabladatos").append(data);
            //Ocultamos boton de nuevo inmueble
            //Para evitar añadir mas de uno 
            //a la vez
            $("#nuevo").hide();
          });//get	
        });
        //Boton de cancelar nuevo
        $(document).on("click", "#cancelarnuevo", function () {
          //Elimina la nueva fila creada
          $("#filanueva").remove();
          //vuelve a mostrar el botón de nuevo (+)
          $("#nuevo").show();

        });

        //Boton de guardar nuevo
        $(document).on("click", "#guardarnuevo", function () {
          $.post("../Controller/usuario_insertar_nuevo.php", {
            "idnuevo": $("#idnuevo").val(),
            "passwordnuevo": $("#passwordnuevo").val(),
            "nombrenuevo": $("#nombrenuevo").val(),
            "apellidosnuevo": $("#apellidosnuevo").val(),
            "correonuevo": $("#correonuevo").val(),
            "direccionnuevo": $("#direccionnuevo").val(),
            "telefononuevo": $("#telefononuevo").val(),
            "tipousuarionuevo": $("#tipousuarionuevo").val()
          }, function (data) {
            //Pinta de nuevo la tabla
            $("#contenedor").html(data);
            //Vuelve a mostrar el boton de nuevo
            $("#nuevo").show();
          });//post	
        });

        //--- PAGINACION -----
        $(document).on("click", ".pagination li a", function () {
          var numpage = $(this).data("page");
          $.get("tabla.php", {page: numpage}, function (data) {
            $("#contenedor").html(data);
          });
        });
      }); //ready