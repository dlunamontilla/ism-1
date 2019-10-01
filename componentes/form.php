<?php

$form = <<<HTML

<div class="rsvp--form">
  <p class="uppercase t--semi-bold t-color--white">Por favor, confirmar tu asistencia antes del 01 de noviembre:</p>

  <!-- Formularios -->
  <form action="" method="post">
    <label class="rsvp__label" for="nombre" class="input--text">
      <input class="rsvp__label--input" type="text" name="nombre" id="nombre">
      <span class="rsvp__label--text uppercase">Nombre:</span>
    </label>

    <label class="rsvp__label" for="asistire" class="input--text">
      <input class="rsvp__label--input" type="text" name="asistire" id="asistire">
      <span class="rsvp__label--text uppercase">Asistiré:</span>
    </label>

    <label class="rsvp__label" for="noPodre" class="input--text">
      <input class="rsvp__label--input" type="text" name="noPodre" id="noPodre">
      <span class="rsvp__label--text uppercase">Lamentablemente, no podré:</span>
    </label>

    <label class="rsvp__label" for="nAsistentes" class="input--text">
      <input class="rsvp__label--input" type="text" name="nAsistentes" id="nAsistentes" maxlength="2">
      <span class="rsvp__label--text uppercase">Número de asistentes:</span>
    </label>

    <div class="group--button">
      <button type="submit" class="btn btn--submit">Enviar</button>
    </div>
  </form>
</div>

HTML;


?>