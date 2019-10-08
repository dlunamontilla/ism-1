<?php

$comoLlegar = <<<HTML

  <div class="como-llegar fijar" id="mapas">
    <div class="como-llegar--content">
      <p class="text--center"><img src="vista/images/componentes/como-llegar-v.svg" alt="¿Cómo llegar?" class="text--image"></p>

      <div class="flex align--center">
        <div class="flex--item">
          <img class="ubicacion ubicacion--small" src="vista/images/ubicacion.svg" alt="Ubicación">
          <p class="t--big t--semi-bold t-color--base">MISA</p>
          <p class="m--0">CALLE 22 por 21 y 23,</p>
          <p class="">CHOLUL, 97305 CHOLUL, YUC.</p>

          <!-- Botón -->
          <p><a href="#rsvp" class="btn btn--enlace">RSVP</a></p>

          <p class="text--center width">
            <img class="thumbnail thumbnail--small thumbnail--shadow" src="vista/images/misa.jpeg" alt="Google Maps">
          </p>

          <!-- Mapa de Google -->
          <div class="mapas" id="GoogleMapsIglesia">
            <iframe class="mapas__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7637734449704!2d-89.55947498506714!3d21.042135985991177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56777853bf5cc3%3A0xa2d04985c3cf7370!2sParroquia%20de%20San%20Pedro%20Ap%C3%B3stol!5e0!3m2!1ses-419!2sve!4v1570554371326!5m2!1ses-419!2sve" allowfullscreen="" name="iglesia-map" id="iglesia-map"></iframe>
          </div>

        </div>

        <div class="flex--item">
          <img class="ubicacion ubicacion--small" src="vista/images/ubicacion.svg" alt="Ubicación">
          <p class="t--big t--semi-bold t-color--base">RECEPCIÓN</p>
          <p class="m--0">CALLE 18 DIAGONAL</p>
          <p class="">X 17 CHOLUL, YUC</p>

          <!-- Botón -->
          <p><a href="#rsvp" class="btn btn--enlace">RSVP</a></p>

          <p class="text--center width">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.626357761526!2d-89.56512028506704!3d21.047631285988142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56779dc638c19d%3A0xd8ee69318e15c8db!2sCervefr%C3%ADo%20EL%20ALAMO!5e0!3m2!1ses-419!2sve!4v1570561990629!5m2!1ses-419!2sve" target="recepcion-map" class="mapas--enlace">
              <img class="thumbnail thumbnail--small thumbnail--shadow" src="vista/images/google-maps.png" alt="Google Maps">
            </a>
          </p>
          <div class="mapas none" id="GoogleMaps">
            <iframe class="mapas__iframe" src="" allowfullscreen="" name="recepcion-map" id="recepcion-map"></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>

HTML;

?>