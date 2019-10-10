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

// Uso de la biblioteca moment.js para calcular
// las fechas:
(function (window, document) {
  let
    boda = moment('2019-11-16 16:00:00-06:00'),
    hoy = moment();


  // Realizando pruebas con JavaScript puro:
  let dias = 0, horas = 0, minutos = 0, segundos = 0;

  let
    numberDias = document.querySelector("#dias-n"),
    numberHoras = document.querySelector("#horas-n"),
    numberMinutos = document.querySelector("#minutos-n"),
    numberSegundos = document.querySelector("#segundos-n");

  const digitos = function ( digito ) {
    if ( digito === undefined )
      return "00";

    if ( 0 <= digito && digito < 10 )
      return `0${digito}`;

    return `${digito}`;
  }

  const fCronometro = ( dg, timer ) => {
    if ( dg === undefined )
      return;

    if ( timer === undefined )
      return;

    

    // Comprobar los elementos:
    if ( numberDias === null || numberHoras === null || numberMinutos === null || numberSegundos === null )
      return;

    // Capturar fecha actual:
    hoy = moment();

    // Días:
    dias = boda.diff(hoy, 'days');
    
    // Horas:
    horas = boda.diff(hoy, 'hours');
    horas = horas % 24;
    
    // Minutos:
    minutos = boda.diff(hoy, 'minutes');
    minutos = minutos % 60;
    
    // Segundos:
    segundos = boda.diff(hoy, 'seconds');
    segundos = segundos % 60;
    
    if ( dias <= 0 && horas <= 0 && minutos <= 0 && segundos <= 0 ) {
      // Detener el reloj:
      clearInterval(timer);
      
      // Establecer los valores en cero(0):
      dias = horas = minutos = segundos = 0;
    }

    // Actualizar fechas:
    numberDias.textContent = dg( dias );
    numberHoras.textContent = dg( horas );
    numberMinutos.textContent = dg( minutos );
    numberSegundos.textContent = dg( segundos );

    return;
  };
  
  let timer = setInterval(function () {
    fCronometro( digitos, timer );
  }, 1000);

  



}(window, document));

// Formulario de invitación:
(function (window, document, $) {
  
  $(document).ready(function () {
    $("#formInvitacion").submit(function ( e ) {
      e.preventDefault();

      // Activar el aviso:
      $("#aviso").removeClass("none");
      $("#aviso-content").addClass("aviso--content-esperando");

      let url = this.action;

      $.ajax({
        type: "POST",
        url: url,
        data: $("#formInvitacion").serialize(),

        success: function ( data ) {
          $("#parrafo-content").html(data);
          $("#aviso-content").removeClass("aviso--content-esperando");
          $("#formInvitacion")[0].reset();
          
          setTimeout(() => {
            $("#aviso").addClass("none");
          }, 5000);
        }
      });

    });
  });

}(window, document, jQuery))

  // $('#btn-ingresar').click(function(){
  //     var url = "datos_login.php";
  //     $.ajax({                        
  //        type: "POST",                 
  //        url: url,                     
  //        data: $("#formulario").serialize(), 
  //        success: function(data)             
  //        {
  //          $('#resp').html(data);               
  //        }
  //    });
  // });