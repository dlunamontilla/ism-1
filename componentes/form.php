<?php

$form = <<<HTML

<!-- **naila20** -->
<div class="rsvp--form">
  <p class="uppercase t--semi-bold t-color--white">Por favor, confirmar tu asistencia antes del 01 de noviembre:</p>

  <!-- Formularios -->
  <form action="" method="post">
    <label class="rsvp__label" for="nombre" class="input--text">
      <input class="rsvp__label--input" type="text" name="nombre" id="nombre">
      <span class="rsvp__label--text uppercase">Nombre:</span>
    </label>

    <label class="rsvp__label" for="nAsistentes" class="input--text">
      <input class="rsvp__label--input" type="text" name="nAsistentes" id="nAsistentes" maxlength="2">
      <span class="rsvp__label--text uppercase">Número de asistentes:</span>
    </label>

    <div class="group padding padding--v">
      <label for="asistire-r" class="group--options">
        <input type="radio" name="asistire-noasistire" id="asistire-r">
        <i class="far fa-circle unchecked"></i>
        <i class="far fa-check-circle checked"></i>
        <span class="radio--text">Asistiré</span>
      </label>
      
      <label for="no-asistire" class="group--options">
        <input type="radio" name="asistire-noasistire" id="no-asistire">
        <i class="far fa-circle unchecked"></i>
        <i class="far fa-check-circle checked"></i>
        <span class="radio--text">Lamentablemente, no podré</span>
      </label>
    </div>
    
    <div class="group--button">
      <button type="submit" class="btn btn--submit">Enviar</button>
    </div>
  </form>
</div>

HTML;


?>