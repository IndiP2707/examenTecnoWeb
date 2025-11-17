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

  //SELECT2 cursos
  $(document).ready(function() {
    $('.js-example-basic-single').select2({
      placeholder: "Selecciona o busca una sección",
      allowClear: true
    });

    //Para redirigir al seleccionar una opción:
    $('#secciones').on('change', function() {
      var enlace = $(this).val();
      if (enlace && enlace !== "#") {
        window.location.href = enlace;
      }
    });
  });
  /*/select2 lupa
 $(document).ready(function(){ 
    $('#BuscarLupa').select2({
        placeholder: "BUSCAR",
        allowClear: true
    });
    $('#lupa-btn').on('click', function(e){ 
        e.preventDefault();
        $('#BuscarLupa').select2('open');
    });

    $('#BuscarLupa').on('change', function(){
        var hash = $(this).val(); 
        if(enlace && enlace !== "#"){
            window.location.href = enlace;
        }
    });
});
  
});
*/

</script>

</html>