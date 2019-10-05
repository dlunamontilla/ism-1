<?php
$menuHorizontal = <<<HTML

<nav class="navigation-h">
  <ul class="menu-horizontal">
    <li class="menu-horizontal--item"><a class="menu-horizontal--enlace" href="#">GONZALO & FERNANDA</a></li>
    <li class="menu-horizontal--item"><a class="menu-horizontal--enlace" href="#">HOME</a></li>
    <li class="menu-horizontal--item"><a class="menu-horizontal--enlace" href="#">Nuestra Historia</a></li>
    <li class="menu-horizontal--item"><a class="menu-horizontal--enlace" href="#">Wedding</a></li>
    <li class="menu-horizontal--item"><a class="menu-horizontal--enlace" href="#">Sitios de Interés</a></li>
    <li class="menu-horizontal--item"><a class="menu-horizontal--enlace" href="#">Registrarse</a></li>
    <li class="menu-horizontal--item"><a class="menu-horizontal--enlace" href="#rsvp">RSVP</a></li>
  </ul>
</nav>

<!-- Requiere uso de JavaScript -->
<nav class="navigation-h--movil">
  <div class="group--button-movil">
    <button type="button" class="btn btn--menu" id="menuButton"><i class="fas fa-bars"></i>Menú</button>
  </div>

  <ul class="menu-movil" id="menuLista">
    <li class="menu-movil--item"><a href="#" class="menu-movil--enlace">GONZALO & FERNANDA</a></li>
    <li class="menu-movil--item"><a href="#" class="menu-movil--enlace">HOME</a></li>
    <li class="menu-movil--item"><a href="#" class="menu-movil--enlace">Nuestra Historia</a></li>
    <li class="menu-movil--item"><a href="#" class="menu-movil--enlace">Wedding</a></li>
    <li class="menu-movil--item"><a href="#" class="menu-movil--enlace">Sitios de Interés</a></li>
    <li class="menu-movil--item"><a href="#" class="menu-movil--enlace">Regístrese</a></li>
    <li class="menu-movil--item"><a href="#rsvp" class="menu-movil--enlace">RSVP</a></li>
  </ul>
</nav>
HTML;
?>