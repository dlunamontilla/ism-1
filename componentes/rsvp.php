<?php

$rsvp = <<<HTML

<div class="rsvp f-color--base padding padding--v fijar" id="rsvp">
  <p class="text--center"><img src="vista/images/componentes/rsvp-v.svg" alt="RSVP" class="text--image"></p>

  $form
  
  $contacto
  
  <p class="t--big text--center t--semi-bold t-color--secundario t--italic"><i class="fas fa-envelope"></i> REGALO EN EFECTIVO</p>

</div>

HTML;

?>