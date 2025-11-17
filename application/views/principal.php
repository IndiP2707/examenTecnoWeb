<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Cursos Online Pro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <?php
      if(!empty($secciones)){
        foreach($secciones as $item){
          if($item->href=="#"){
            ?>
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="<?=$item->href?>"><?=$item->nombre_seccion?>
              <span class="caret"></span></a>
            <?php
          }else{
            ?>
              <li><a href="<?=$item->href?>"><?=$item->nombre_seccion?></a></li>
            <?php
          }
          
        }
      }
      ?>
          <ul class="dropdown-menu">
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Equipo</a></li> 
          </ul>
        </li>

        <!--<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
        <li class="dropdown">
    <a href="#" id="lupa-btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-search"></span> 
    </a>
    
    <ul class="dropdown-menu" id="lupa-dropdown-menu">
        <?php
        // Usa la variable cargada por el controlador: $seccioneslupa
        if(!empty($seccioneslupa)){ 
            foreach($seccioneslupa as $itemLupa){
        ?>
                <li><a href="<?=$itemLupa->href?>"><?=$itemLupa->nombre_seccion?></a></li>
        <?php
            }
        }
        ?>
    </ul>
</li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!--IMAGENES-->
    <!-- Wrapper for slides -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
      if(!empty($cintaimagenes)){
        $i=1;
        foreach($cintaimagenes as $item){
          if ($i==1){
            ?>
            <div class="item active">
            <?php
          }else{
            ?>
            <div class="item">
            <?php
          }
          ?>
          <img src="<?=base_url().$item->ruta.$item->nombre_archivo?>" alt="<?=$item->alt?>" width="1200" height="700">
            <div class="carousel-caption">
              <h3><?=$item->titulo?></h3>
              <p><?=$item->subtitulo?></p>
            </div>      
          </div>
          <?php
          $i+=1;
        }
        ?>
        </div>
        <?php
      }
      ?>

    <!--
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?=base_url()?>assets/imagenes/RV.jpg" alt="rv" width="1200" height="700">
        <div class="carousel-caption">
          <h3>PROXIMOS CURSOS</h3>
          <p>Introducción a la Realidad Virtual (VR).</p>
        </div>      
      </div>

      <div class="item">
        <img src="<?=base_url()?>assets/imagenes/gestion.jpg" alt="Gestion" width="1200" height="700">
        <div class="carousel-caption">
          <h3>PROXIMOS CURSOS</h3>
          <p>Gestión de Proyectos con Scrum y Agiles</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="<?=base_url()?>assets/imagenes/moneda.jpg" alt="Moneda" width="1200" height="700">
        <div class="carousel-caption">
          <h3>PROXIMOS CURSOS</h3>
          <p>Finanzas Personales y Criptomonedas</p>
        </div>      
      </div>
    </div>-->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="cursos" class="container text-center">
  <h3>CURSOS</h3>

<!-- SELECT2-->
<!--Buscador de secciones con Select2 -->
<!-- SELECT2 -->
<div class="container" style="margin-top: 20px; max-width: 1000px; width: 100%;">
  <label for="buscarCurso">Buscar curso:</label>
  <select class="js-example-basic-single form-control" id="buscarCurso" name="buscarCurso">
    <option value="">Seleccione un curso...</option>
  </select>
</div>



  <p><em>¡AMAMOS ENSEÑAR!</em></p>
  <p>Hemos creado una página dedicada a ofrecer cursos en distintas áreas de conocimiento. Nuestro objetivo es brindar un espacio accesible donde cualquier persona pueda aprender y desarrollar nuevas habilidades de manera práctica y dinámica. La plataforma está pensada para que el aprendizaje sea flexible, permitiendo estudiar a tu propio ritmo y desde cualquier lugar. Creemos firmemente en la importancia de la educación continua y en el poder de adquirir conocimientos que impulsen el crecimiento personal y profesional.</p>
  <!-- Cursos destacados -->
  <br>
  <div class="row">
    <div class="col-sm-2 col-sm-offset-1">
      <p class="text-center"><strong>Programación en Python</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/python.jpg" class="img-circle person" alt="Python" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p><?=$contenido1->t1?></p>
        <p><?=$contenido1->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Desarrollo Web con HTML</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/html.jpg" class="img-circle person" alt="HTML" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p><?=$contenido2->t1?></p>
        <p><?=$contenido2->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Introducción a la Inteligencia A</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/IA.jpg" class="img-circle person" alt="Ia" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p><?=$contenido3->t1?></p>
        <p><?=$contenido3->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Marketing Digital para Negocios</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/negocios.jpg" class="img-circle person" alt="Negocios" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p><?=$contenido4->t1?></p>
        <p><?=$contenido4->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Excel para Negocios</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/excel.jpg" class="img-circle person" alt="Excel" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p><?=$contenido5->t1?></p>
        <p><?=$contenido5->t2?></p>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2 col-sm-offset-1">
      <p class="text-center"><strong>Diseño Gráfico con Canva</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/diseño.jpg" class="img-circle person" alt="Diseño" width="255" height="255">
      </a>
      <div id="demo6" class="collapse">
        <p><?=$contenido6->t1?></p>
        <p><?=$contenido6->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Fundamentos de Redes</strong></p><br>
      <a href="#demo7" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/redes.jpg" class="img-circle person" alt="Redes" width="255" height="255">
      </a>
      <div id="demo7" class="collapse">
        <p><?=$contenido7->t1?></p>
        <p><?=$contenido7->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Contabilidad Básica práctica</strong></p><br>
      <a href="#demo8" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/Contabilidad.jpg" class="img-circle person" alt="contabilidad" width="255" height="255">
      </a>
      <div id="demo8" class="collapse">
        <p><?=$contenido8->t1?></p>
        <p><?=$contenido8->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Fotografía medios electrónicos</strong></p><br>
      <a href="#demo9" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/fotografía.jpg" class="img-circle person" alt="Fotografía" width="255" height="255">
      </a>
      <div id="demo9" class="collapse">
        <p><?=$contenido9->t1?></p>
        <p><?=$contenido9->t2?></p>

      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Inglés Negocios/Empresarial</strong></p><br>
      <a href="#demo10" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/ingles.jpg" class="img-circle person" alt="Ingles" width="255" height="255">
      </a>
      <div id="demo10" class="collapse">
        <p><?=$contenido10->t1?></p>
        <p><?=$contenido10->t2?></p>

      </div>
    </div>
  </div>
</div>

<!--<div id="contact" class="container">-->
<div id="Inscripciones" class="bg-1">
  <div class="container">
    <h3 class="text-center">INSCRIPCIONES</h3>
    <p class="text-center">¡Inscríbete ya!<br> CUPOS POR CURSO</p>

        <!--<h4>Este es el contenido</h4>-->
        
        <!--<button type='button' onclick="MostrarListado()">Cargar Listado</button>-->
        <button class="btn2" data-toggle="modal" onclick="MostrarListado()">VER CURSOS</button>
      </div>

      <div id="contenido_respuesta" class="container" style="display:none">
    
    </div>
  </div>
</div>


<!-- Container (inscripciones Section) 
<div id="Inscripciones" class="bg-1">
  <div class="container">
    <h3 class="text-center">INSCRIPCIONES</h3>
    <p class="text-center">¡Inscríbete ya!<br> CUPOS POR CURSO</p>

    <div class="row text-center">
      <?php
      if (!empty($inscripciones)) {
          foreach ($inscripciones as $curso){ 
            ?>
              <div class="col-sm-4">
                <div class="thumbnail">
                  <img src="<?= base_url() . $curso->ruta . $curso->nombre_archivo ?>"alt="<?= $curso->alt ?>" width="400" height="300">
                  <p><strong><?= $curso->nombre_curso ?></strong></p>
                  <p>Empieza <?= date("d M Y", strtotime($curso->fecha_inicio))?></p>
                  <p><span class="badge"><?= $curso->cupos ?> cupos</span></p>


                  <button class="btn" data-toggle="modal" data-target="#myModal">INSCRIBIRSE</button>
                </div>
              </div>
            <?php 
          }
      } else { 
        ?>
        <p class="text-center">No hay cursos disponibles actualmente.</p>
        <?php 
      } 
      ?>
    </div>
  </div>
</div>-->

<!--
<div id="Inscripciones" class="bg-1">
  <div class="container">
    <h3 class="text-center">INSCRIPCIONES</h3>
    <p class="text-center">Inscribete ya!<br> CUPOS POR CURSO</p>
    <ul class="list-group">
      <li class="list-group-item">Diseño Gráfico con Canva <span class="label label-danger">Lleno!</span></li> 
      <li class="list-group-item">Fundamentos de Redes <span class="badge">40 cupos</span></li> 
      <li class="list-group-item">Contabilidad Básica práctica <span class="label label-danger">Lleno!</span></li>     
      <li class="list-group-item">Fotografía medios electrónicos <span class="label label-danger">Lleno!</span></li>      
      <li class="list-group-item">Inglés Negocios/Empresarial <span class="label label-danger">Lleno!</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/redes.jpg" alt="Redes" width="400" height="300">
          <p><strong>Fundamentos de Redes</strong></p>
          <p>Empieza 03 octubre 2025</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscribirse</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/python.jpg" alt="Python" width="400" height="300">
          <p><strong>Programación en Python</strong></p>
          <p>Empieza 01 octubre 2025</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscribirse</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/html.jpg" alt="HTML" width="400" height="300">
          <p><strong>Desarrollo Web con HTML</strong></p>
          <p>Empieza 11 octubre 2025</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscribirse</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/IA.jpg" alt="New York" width="400" height="300">
          <p><strong>Introducción a la Inteligencia A</strong></p>
          <p>Empieza 05 octubre 2025</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscribirse</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/negocios.jpg" alt="Negocios" width="400" height="300">
          <p><strong>Marketing Digital para Negocios</strong></p>
          <p>Empieza 01 octubre 2025</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscribirse</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>assets/imagenes/excel.jpg" alt="Excel" width="400" height="300">
          <p><strong>Excel para Negocios</strong></p>
          <p>Empieza 10 octubre 2025</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Inscribirse</button>
        </div>
      </div>
    </div>
  </div>-->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4><span class="glyphicon glyphicon-lock"></span>PAGO</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Pago, $1500 por persona</label>
              <input type="number" class="form-control" id="psw" placeholder="Cuantos?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Enviar a</label>
              <input type="text" class="form-control" id="usrname" placeholder="Introduzca su email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>


<!-- Container (Contact Section) -->
<div id="contact" class="container">
<h3 class="text-center">CONTACTO</h3> 
<p class="text-center"><em>Dudas, preguntas. Contactate con nosotros!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Envianos un mensaje</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Mexico, MX</p>
      <p><span class="glyphicon glyphicon-phone"></span>Teléfono: +55 9996453689</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: CursosOnlinePro@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- COMENTO EL MATERIAL DE APOYO
  <h3 class="text-center">MATERIAL DE APOYO</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Gias Rápidas</a></li>
    <li><a data-toggle="tab" href="#menu1">Artículos</a></li>
    <li><a data-toggle="tab" href="#menu2">Presentaciones</a></li> 
    <li><a data-toggle="tab" href="#menu3">Videos</a></li>     
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Guía de referencia rápida</h2>
      <p>Sobre tecnologías de internet que explica modelos, ventajas y desventajas.</p>
      <a href="https://www.vocaeditorial.com/blog/recursos-tecnologicos/" target="_blank">Consultar editorial</a>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Artículos sobre las mejores herramientas</h2>
      <p>Para programación, como GitHub, Rust y otras tecnologías relevantes para desarrolladores modernos.</p>
      <a href="https://www.hostinger.com/mx/tutoriales/herramientas-de-programacion" target="_blank">Consultar hostinger</a><br>
      <a href="https://www.nationalgeographic.com.es/temas/tecnologia" target="_blank">Consultar .harvard-deusto</a><br>
      <a href="https://www.harvard-deusto.com/tic" target="_blank">Consultar nationalgeographic</a>    
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Plantillas de presentaciones</h2>
      <p>Para enseñar y explicar conceptos de programación, desde introducciones en Java hasta arquitectura de computadoras, editables para PowerPoint y Google Slides.</p>
      <a href="https://slidesgo.com/es/programacion" target="_blank">Consultar slidesgo</a><br>
      <a href="https://es.slideshare.net/slideshow/la-programacinpptx-254845118/254845118" target="_blank">Consultar slideshare</a>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>Videos educativos</h2>
      <p>Que cubren una amplia variedad de temas relacionados con la programación y las tecnologías de la información. </p>
      <a href="https://www.youtube.com/c/Programaci%C3%B3nATS" target="_blank">canales especializados en programación</a><br>
      <a href="https://www.youtube.com/@freecodecampes" target="_blank">recursos gratis para ayudarte a aprender a programar.</a>
    </div>
  </div>CIERRO EL MATERIAL DE APOYO --> 
  <!-- COOODIGO DE LA CARGA DEL MATERIAL DE APOYO DE LA BASE DE DATOS-->
      <p><div id="material" class ="container"></div></p>
<h3 class="text-center nav nav-tabs">MATERIAL DE APOYO</h3>
<?php
//  AGRUPAR LOS DATOS por el campo 'href' (#home, #menu1, etc.)
$categorias = [];
if (!empty($materialapoyo)) {
    foreach ($materialapoyo as $item) {
        $href = $item->href;
        // esto es para cada menu
        if (!isset($categorias[$href])) {
            $categorias[$href] = [
                'tituloma' => $item->tituloma,
                'titulo' => $item->titulo,
                'subtitulo' => $item->subtitulo,
                'recursos' => [], // Aquí van los enlaces que se guardan de las categorias
            ];
        } 
        // Agregar el recurso a la categoría
        $categorias[$href]['recursos'][] = [
            'ruta' => $item->ruta,
            'boton' => $item->boton,
        ];
    }
}
// Mensaje si no hay datos
if (empty($categorias)) {
    echo '<p class="text-center">No hay material de apoyo disponible en este momento.</p>';
}
?>
<ul class="nav nav-tabs">
    <?php $i = 0; ?>
    <?php foreach ($categorias as $href => $data): ?>
        <?php
            // El primer elemento debe tener la clase 'active'
            $active_class = ($i == 0) ? 'active' : '';
        ?>
        <li class="<?php echo $active_class; ?>">
            <a data-toggle="tab" href="<?php echo $href; ?>">
                <?php echo $data['tituloma']; ?>
            </a>
        </li>
    <?php $i++; ?>
    <?php endforeach; ?>
</ul>
<div class="tab-content">
    <?php $i = 0; ?>
    <?php foreach ($categorias as $href => $data): ?>
        <?php
            // El primer panel debe tener las clases 'in active'
            $active_class = ($i == 0) ? 'in active' : '';
            // El ID del panel es el href sin el #
            $panel_id = str_replace('#', '', $href);
        ?>
        <div id="<?php echo $panel_id; ?>" class="tab-pane fade <?php echo $active_class; ?>">
            <h2><?php echo $data['titulo']; ?></h2>
            <p><?php echo $data['subtitulo']; ?></p>
            
            <?php foreach ($data['recursos'] as $recurso): ?>
                <a href="<?php echo $recurso['ruta']; ?>" target="_blank">
                    <?php echo $recurso['boton']; ?>
                </a>
                <br>
            <?php endforeach; ?>
        </div>
    <?php $i++; ?>
    <?php endforeach; ?>
</div>
</div><!--NO MOVER ESTE CIERRE  --> 
   
<!-- Container (certificacion) -->

<div id="certificaciones" class="container text-center">
  <h3>CERTIFICACIONES</h3>
  <p><em>¡Al finalizar cada curso obtendrás un certificado avalado por nuestra academia!</em></p>
  <p>Algunos de ellos son ...</p><br>
  <div class="row">
    <div class="col-sm-4">

      <a href="#demo" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/certificados.png" class="img-circle person" alt="Certificados" width="255" height="255">
      </a>
      <p class="text-center"><strong>Certificado en Inteligencia Artificial <br>y Machine Learning</strong></p><br>
    </div>
    <div class="col-sm-4">

      <a href="#demo2" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/certificados.png" class="img-circle person" alt="Certificados" width="255" height="255">
      </a>
      <p class="text-center"><strong>Certificado en Ciberseguridad y <br>Privacidad de Datos</strong></p><br>
    </div>
    <div class="col-sm-4">
  
      <a href="#demo3" data-toggle="collapse">
        <img src="<?=base_url()?>assets/imagenes/certificados.png" class="img-circle person" alt="Certificados" width="255" height="255">
      </a>
      <p class="text-center"><strong>Certificado en Programación <br>Web Full Stack</strong></p><br>
    </div>
  </div>
</div>

<!-- Container (Empresas afiliadas Section) -->
<div id="afiliadas" class="container-fluid text-center bg-grey">
  <h3>EMPRESAS AFILIADAS</h3>
  <p class="text-center">En Cursos Online trabajamos de la mano con empresas líderes en tecnología y educación que reconocen el valor de nuestras certificaciones.<br> Estas alianzas permiten a nuestros estudiantes acceder a mejores oportunidades laborales y mantenerse actualizados en un mundo competitivo.</p><br>

  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?=base_url()?>assets/imagenes/google.jpg" alt="Google" width="400" height="300">
        <p><strong>Google for Education</strong></p>
        <p>Nuestros cursos están alineados con las herramientas y certificaciones de Google, para que los estudiantes apliquen sus conocimientos en entornos reales de trabajo.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?=base_url()?>assets/imagenes/microsoft.jpg" alt="Microsoft" width="400" height="300">
        <p><strong>Microsoft Learn</strong></p>
        <p>En alianza con Microsoft ofrecemos capacitación en herramientas de productividad, nube y análisis de datos.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?=base_url()?>assets/imagenes/linkedin.jpg" alt="Linkedin" width="400" height="300">
        <p><strong>LinkedIn Learning</strong></p>
        <p>Nuestros estudiantes pueden compartir sus certificados en LinkedIn, aumentando sus oportunidades laborales.</p>
      </div>
    </div>
  </div>
</div> 

<!-- Container (Casos exito) -->
<div id="casos" class="container text-center">
  <h3>CASOS DE EXITO</h3>
  <p class="text-center">¡Cada curso es una oportunidad para crecer! Nuestros estudiantes no solo adquieren conocimientos,<br> sino que logran cumplir sueños, conseguir empleos y emprender nuevos proyectos.<br> Estos son algunos testimonios que reflejan el impacto real de nuestra academia</p>
  <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h3><br>"Gracias al curso de Excel Avanzado <br>ahora manejo bases de datos<br> y reportes dinámicos.<br>Esto me permitió ascender a <br>analista en una <br>empresa internacional".<br><span><br>Ana López - Analista Financiera</span></h3><br>
      </div>
      <div class="item">
        <h3><br>"Con el curso de Programación en <br>Python logré crear proyectos <br>propios y conseguí una beca <br>para estudiar en el extranjero."<br><span><br><br><br>José Martínez - Desarrollador Web</span></h3><br>
      </div>
      <div class="item">
        <h3><br>"Después de tomar el curso de<br> Marketing Digital, pude lanzar <br>mi tienda en línea y <br>aumentar mis ventas en un 300%".<br><span><br><br><br>María Hernández - Emprendedora Digital</span></h3><br>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Seguridad y Privacidad Section) -->
<div id="privacidad" class="container text-center">
  <h3>SEGURIDAD Y PRIVACIDAD</h3>
  <p class="text-center"><em>Protegemos tus datos conforme a la Ley de Protección de Datos Personales. Tu información nunca será compartida sin tu consentimiento.</em></p>
  <p class="text-center">En nuestra plataforma implementamos las mejores prácticas de seguridad para garantizar la confidencialidad, integridad y disponibilidad de tu información.</p><br>
  
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <span class="glyphicon glyphicon-lock" style="font-size:50px;color:#337ab7;"></span>
        <p><strong>Datos Encriptados</strong></p>
        <p>Toda la información personal se almacena de forma cifrada para protegerla contra accesos no autorizados.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <span class="glyphicon glyphicon-globe" style="font-size:50px;color:#337ab7;"></span>
        <p><strong>Certificados SSL</strong></p>
        <p>Navegación segura con certificados SSL que protegen tus datos durante la transmisión.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <span class="glyphicon glyphicon-credit-card" style="font-size:50px;color:#337ab7;"></span>
        <p><strong>Pago Seguro</strong></p>
        <p>Procesos de pago en línea protegidos mediante pasarelas certificadas y protocolos de seguridad.</p>
      </div>
    </div>
  </div>
</div>


<!-- Image of location/map -->
<img src="<?=base_url()?>assets/imagenes/map.jpg" class="img-responsive" style="width:100%">


<!--SELECT2-->
<script>
$(document).ready(function() {
  // Inicializa Select2
  $('#buscarCurso').select2({
    placeholder: "Buscar curso...",
    allowClear: true
  });

  // Recorre todos los nombres de los cursos en la página
  $('.text-center strong').each(function() {
    const nombreCurso = $(this).text().trim(); // Nombre del curso (ej: "Excel para Negocios")
    const enlace = $(this).closest('.col-sm-2, .col-sm-2.col-sm-offset-1').find('a').attr('href'); // ID del collapse (ej: #demo5)

    // Agrega cada curso como una opción al Select
    if (nombreCurso && enlace) {
      $('#buscarCurso').append(new Option(nombreCurso, enlace));
    }
  });
  //Indira Pérez?
  // Cuando el usuario selecciona un curso, se despliega automáticamente
  $('#buscarCurso').on('change', function() {
    const target = $(this).val();
    if (target) {
      // Cierra todos los collapse abiertos
      $('.collapse').collapse('hide');
      // Abre el seleccionado
      $(target).collapse('show');

      // Hace scroll hasta el curso seleccionado
      $('html, body').animate({
        scrollTop: $(target).offset().top - 100
      }, 600);
    }
  });
});
</script>


</body>