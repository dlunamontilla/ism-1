<?php
$carousel = <<<HTML
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
\t\t\t  <ol class="carousel-indicators">
\t\t\t    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
\t\t\t    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
\t\t\t    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
\t\t\t  </ol>
\t\t\t   
\t\t\t  <div class="carousel-inner">
\t\t\t    <div class="carousel-item active">
\t\t\t      <img src="..." class="d-block w-100" alt="...">
\t\t\t    </div>
\t\t\t    <div class="carousel-item">
\t\t\t      <img src="..." class="d-block w-100" alt="...">
\t\t\t    </div>
\t\t\t    <div class="carousel-item">
\t\t\t      <img src="..." class="d-block w-100" alt="...">
\t\t\t    </div>
\t\t\t  </div>
\t\t\t
\t\t\t  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
\t\t\t    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
\t\t\t    <span class="sr-only">Atrás</span>
\t\t\t  </a>
\t\t\t  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
\t\t\t    <span class="carousel-control-next-icon" aria-hidden="true"></span>
\t\t\t    <span class="sr-only">Siguiente</span>
\t\t\t  </a>
\t\t\t</div>
HTML;

$carousel .= "\n";
?>