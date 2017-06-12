    <script>
  $( function() {
//    Politica de privacidad
    $( "#privacidad" ).dialog({
      autoOpen: false,
      width: 600,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#abrirPrivacidad" ).on( "click", function() {
      $( "#privacidad" ).dialog( "open" );
    });
//    Terminos de uso
    $( "#terminos" ).dialog({
      autoOpen: false,
      width: 600,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#abrirTerminos" ).on( "click", function() {
      $( "#terminos" ).dialog( "open" );
    });
    
//    Contacto
    $( "#contacto" ).dialog({
      autoOpen: false,
      width: 600,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#abrirContacto" ).on( "click", function() {
      $( "#contacto" ).dialog( "open" );
    });


  } );
  </script>
<div id="privacidad"title="Politica de privacidad">
  <iframe style="width: 100%;height: 500px" src="./pdf/export.html"></iframe>
</div>
<div id="terminos"title="Terminos de uso">
  <iframe style="width: 100%;height: 500px" src="./pdf/terminos.html"></iframe>
</div>
<div id="contacto"title="Contacto">
  <iframe style="width: 100%;height: 500px" src="./pdf/contacto.html"></iframe>
</div>
 
<footer>
  <ul class='menuF'>
    <li><a id="abrirNosotros" href="./quienessomos.php">Conócenos</a></li>
    <li><a id="abrirContacto" href="#">Contacto</a></li>
    <li><a href="./index.php"><img src="./images/m2p.svg" style="width:74.2px;height:41.5px;"></a></li>
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