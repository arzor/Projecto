@extends('layouts.app')

@section('content')
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="servicio-tecnico-en-impresoras-epson-20628-MLV20194294709_112014-O.jpg" alt="Puerto Cabello">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tecnicos de Confianza</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="servicio-tecnico-celulares-samsung-lg-iphone-motorola-999411-MLA20550896764_012016-O.jpg" alt="Puerto Cabello">
          <div class="container">
            <div class="carousel-caption">
              <h1>Calidad y Servicio</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="servicio_tecnicoam.jpg" alt="Puerto Cabello">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tecnicos de cualquier especialidad</h1>            
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="servicio-tecnico-1_1.jpg" alt="Puerto Cabello" width="140" height="140">
          <h2>Tecnicos Preparados</h2>
          <p>Tecnicos preparados para atender cualquier solicitud de cualquier rama</p>
          <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="servtec.jpg" alt="Puerto Cabello" width="140" height="140">
          <h2>Garantia de servicio</h2>
          <p>Nuestros tecnicos ofrecen sus servicios con garantia para que el usuario tenga seguridad del servicio prestado </p>
          <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="slide1_image.png" alt="Puerto Cabello" width="140" height="140">
          <h2>Siempre disponibles</h2>
          <p>Consulta a cualquier hora y verifica cuales tecnicos estan disponibles para solitar su servicio</p>
          <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


@endsection
