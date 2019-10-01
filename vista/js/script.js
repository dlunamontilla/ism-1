// jQuery
(function ($) {

  $(document).ready(function () {
    // Intervalo del carrusel:
    $('.carousel').carousel({
      interval: 2000
    });

    
  });
}(jQuery));

// JavaScript puro:
(function (window, document) {
  const inputFocused = document.querySelectorAll("form input[type='text']");
  const textFocused = document.querySelectorAll("form label span");

  if ( inputFocused.length > 0 ) {
    inputFocused.forEach(function ( texto, key ) {
      texto.addEventListener('focus', () => {
        textFocused[key].classList.add('rsvp__label--text-focused');
      }, false);

      texto.addEventListener('blur', () => {
        if ( texto.value == "" ) {
          textFocused[key].classList.remove('rsvp__label--text-focused');
        }
      }, false);

      if ( texto.value != "" )
        textFocused[key].classList.add("rsvp__label--text-focused");

    });
  }

}(window, document))