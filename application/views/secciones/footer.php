<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Cursos Online Pro <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
    /*ESTO ES PARA EL SELECT2 DE LAS CATEGORIAS
   $('.js-example-basic-single').select2()({
    placeholder:'Seleccionar una categoria',
    allowClear: true
   });*/
})

function MostrarRespuesta(){
  var id=1;
  $.ajax({
    url:"<?=base_url()?>Welcome/ObtenerRespuesta",
    type:"POST",
    dataType:"json",
    data:{idparametro:id},
    async:false
  }).done(function(datos){
    //console.log(datos);
    //$("#contenido_respuesta").html(datos.id);
    if(datos.status){
      $("#contenido_respuesta").html(datos.message+" "+datos.id);
      $("#contenido_respuesta").show("slow");

    }
  }).fail(function(datos){
    console.log(datos);
  });
}

  function MostrarListado(){
    $.ajax({
    url:"<?=base_url()?>Welcome/CargarDatos",
    type:"POST",
    dataType:"json",
    async:true
  }).done(function(datos){
    //console.log(datos);
    //$("#contenido_respuesta").html(datos.id);
    if(datos.status){
      $("#contenido_respuesta").html(datos.html);
      $("#contenido_respuesta").show("slow");
    }
    console.log(datos);
  }).fail(function(datos){
    console.log(datos);
  });
}
$(document).ready(function() {

    // Inicialización de Select2 de Categorías
    $('#select2categorias').select2({
        placeholder: "Buscar Curso",
        allowClear: true 
    });

    // Alias para contenedores
    var originalLayout = $("#cursos-original-layout");
    var cursosContainer = $("#cursos-container");
    var msgDiv = $("#temp-message"); 

    // Lógica Inicial
    msgDiv.hide(); 
    cursosContainer.hide();
    originalLayout.show(); // El layout estático se muestra por defecto.


    // Lógica de Filtrado al cambiar el Select2
    $('#select2categorias').on('change', function() {
        var filter = $(this).val(); 
        
        $(".curso").hide(300); // Ocultar todas las tarjetas dinámicas
        
        // Comportamiento SIN selección (Muestra el layout estático)
        if (!filter) { 
            cursosContainer.hide(300);
            originalLayout.show(300);
            return; 
        }
        
        // Comportamiento CON selección (Muestra el dinámico y filtra)
        originalLayout.hide(300);
        msgDiv.hide();
        cursosContainer.show(300);
        
        if (filter === "demanda") {
            $(".demanda").show(300); 
        } else {
            $("." + filter).show(300);
        }
    });

    // --- LÓGICA DE BOTONES Y OTROS SELECT2 AQUÍ ---
    
    /* Botón 'Información' (Modal)
    $(".btn-informacion").click(function(){
        var curso = $(this).data("curso");
        // Lógica JSON del modal...
    });

    // Botón 'Inscríbete' (Modal Formulario)
    $(".btn-inscribete-form").click(function(){
        var curso = $(this).data("curso");
        $("#curso-seleccionado").val(curso); 
    });
*/
    // Inicialización del Select2 original de búsqueda (#buscarCurso)
    $('#buscarCurso').select2({
        placeholder: "Buscar curso...",
        allowClear: true
    });

    // Llenado dinámico del Select2 #buscarCurso
    $('.text-center strong').each(function() {
        const nombreCurso = $(this).text().trim(); 
        const enlace = $(this).closest('.col-sm-2, .col-sm-2.col-sm-offset-1').find('a').attr('href'); 

        if (nombreCurso && enlace) {
          $('#buscarCurso').append(new Option(nombreCurso, enlace));
        }
    });
    
    // Evento CHANGE para el Select2 #buscarCurso (manejo de collapses)
    $('#buscarCurso').on('change', function() {
        const target = $(this).val();
        if (target) {
          $('.collapse').collapse('hide');
          $(target).collapse('show');
          $('html, body').animate({
            scrollTop: $(target).offset().top - 100
          }, 600);
        }
    });
});

</script>

</html>