<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- SELECT2-->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
      <!-- SELECT2
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>-->


 <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
    overflow-x: hidden;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px; 
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 50%;
    height: 50%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #27474E;
  }
  .carousel-inner img {
  -webkit-filter: grayscale(90%);
  filter: grayscale(40%);
  width: 50%;
  height: 700px;
  object-fit: cover; /* cover para recortar o contain para mostrar completo */
  margin: auto;
}
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    color: #ffffffff;
    background: #5C9EAD;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #AD6B5C;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn2 {
    padding: 10px 20px;
    background-color: #AD6B5C;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #5C9EAD;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #5C9EAD;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    /*-webkit-filter: grayscale(100%);
    filter: grayscale(100%);*/
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #27474E;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #AD6B5C !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: #AD6B5C !important;
  }
  footer {
    background-color: #5c9ead;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #27474E;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }

#myCarousel2 .carousel-inner {
  display: flex;
  align-items: center;
  justify-content: center;
}

#myCarousel2 .item {
  min-height: 250px; /* mismo alto en todos */
}
/* Fondo de las flechas */
#myCarousel2 .left.carousel-control,
#myCarousel2 .right.carousel-control {
  background-image: none;  /* elimina la sombra negra por defecto */
  background-color: transparent; /* sin color de fondo */
  color: #AD6B5C; /* color de las flechas */
}

/* Íconos de las flechas */
#myCarousel2 .glyphicon-chevron-left,
#myCarousel2 .glyphicon-chevron-right {
  color: #AD6B5C; /* cambia el color del ícono de la flecha */
  font-size: 30px; 
}

/* Hover (cuando pasas el mouse) */
#myCarousel2 .left.carousel-control:hover,
#myCarousel2 .right.carousel-control:hover {
  background-color: rgba(0, 123, 255, 0.1); /* un azul muy tenue en hover */
}
/*SELECT2*/
.js-example-basic-single {
  width: 100% !important;
}
/* Estilos para mostrar/ocultar contenidos en la sección de contacto */
.contenido-activo {
  display: block;  /* Muestra el contenido */
}
.contenido-oculto {
  display: none;  /* Oculta el contenido */
}
  </style>
</head>