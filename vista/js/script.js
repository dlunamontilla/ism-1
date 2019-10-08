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

  // Etiquetas:
  let 
    etiquetas = document.querySelectorAll(".group .group--options"),
    radioButton = document.querySelectorAll(`.group .group--options [type="radio"]`);

  if ( etiquetas.length > 0 && radioButton.length > 0 ) {
    function rClase() {
      clase = "group--options-selected";

      etiquetas.forEach( ( etiqueta, key ) => {
        if ( !radioButton[key].checked ) {
          etiqueta.classList.remove(clase);
        }else {
          etiqueta.classList.add(clase);
        }
      });
      
    }

    // Remover clases
    rClase();

    etiquetas.forEach( ( etiqueta, key ) => {
      etiqueta.addEventListener('click', () => {
        // Remover clases
        rClase();

        if ( radioButton[key].checked ) {
          etiqueta.classList.add('group--options-selected');
        }

      }, false);


    });
  }

  // Manipulación de mapas:
  let mapaEnlace = document.querySelectorAll('.mapas--enlace');
  let GoogleMaps = document.querySelector("#GoogleMaps");

  if ( mapaEnlace.length > 0 )
    mapaEnlace.forEach(( mEnlace, key ) => {
      mEnlace.addEventListener('click', () => {
        mEnlace.classList.add("none");

        if ( GoogleMaps !== null ) {
          GoogleMaps.classList.remove('none');
          GoogleMaps.src = mEnlace.href;
        }

      }, false);
    });

  // Obtener JSON de Instagram:
  // https://www.instagram.com/dlunamontilla/?__a=1

}(window, document));


// Uso de jQuery
// (function (window, document, $) {

//   $(document).ready(function () {
//     jQuery("#content-modal").load("componentes/json-content.php?que-visitar");

//     $( "#a" ).load( "article.html" );
//   });

// }(window, document, jQuery));

//  Probando función:
// jQuery( "#content-modal" ).load("componentes/json-content.php?que-visitar");

// let peticion = new dlAjax("#content-modal", {
//   "loading" : "cargando",
//   "success" : "success",
//   "error" : "error",
//   "state" : 3
// });


$("#btnVisita").click(function () {
  // $("#content-modal").load("componentes/json-content.php?que-visitar");
  $("#content-modal").load("componentes/html/que-visitar.html");
});

$("#centros-comerciales").click(function () {
  // $("#content-modal").load("componentes/json-content.php?centros-comerciales");
  $("#content-modal").load("componentes/html/centros-comerciales.html");
});

$("#restaurantes").click(function () {
  $("#content-modal").load("componentes/html/restaurantes.html");
});


$("#btnVisita, #centros-comerciales, #restaurantes").click(function () {
  $("body").addClass("overflow--hidden");
});

$("#salir").click(function () {
  history.back();
  $("body").removeClass("overflow--hidden");
});