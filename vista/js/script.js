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


    // Control del menú de navegación:
    const menuButton = document.querySelector("#menuButton");
    const menuLista = document.querySelector("#menuLista");

    let 
      isButton = Object.prototype.toString.call(menuButton) === '[object HTMLButtonElement]',
      isMenu = Object.prototype.toString.call(menuLista) === '[object HTMLUListElement]';

    
      if ( isButton && isMenu ) {
        menuButton.addEventListener('click', () => {
          menuLista.classList.toggle('menu-movil--active');
        }, false);
      }

    let lista = document.querySelectorAll("#menuLista li");
    if ( lista.length > 0 ) {
     lista.forEach(( elemento ) => {
       elemento.onclick = () => {
        menuLista.classList.toggle('menu-movil--active');
       }
     });
    }
  }

}(window, document))