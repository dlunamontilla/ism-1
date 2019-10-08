/**
 * DAVID E LUNA M <davidlunamontilla@gmail.com>
 * @class dlAjax
 * 
 * @param idHTML
 * @param state
 * 
 */
class dlAjax {
  constructor( idHTML, parametros = {"state" : 3} ) {
    function __isElement ( objeto ) {
      return Object.prototype.toString( objeto ) === "[object Object]";
    }
  
    function __isString ( objeto ) {
      return Object.prototype.toString.call( objeto ) === "[object String]";
    }

    this.objeto = ( __isElement(idHTML) && !__isString(idHTML)) ? idHTML : document.getElementById( idHTML );
    
    this.__client = new XMLHttpRequest();

    this.__peticion = function( state = 3 ) {
      let datos = "";

      this.__client.addEventListener("readystatechange", () => {
        if ( this.__client.readyState === state ) {
          this.objeto.innerHTML = this.__client.responseText;
        }
      }, false);

      // EVALUAR PROGRESO DE CARGA:
      this.__client.addEventListener("progress", (e) => {
        // Continuará...
      }, false);

    }

    this.__state = parametros.state;

    // CONFIRMAR MÉTODO DE ENVÍO
    this.__confirmar = function ( method, url ) {
      if ( typeof method === "undefined ")
        return;

      this.__peticion( this.__state );
      this.__client.open( method, url );
      this.__client.send();
    }
  }

  // MÉTODOS DE ENVÍO:
  get( url = "./" ) {
    this.__confirmar( "get", url );
  }

  post( url = "./" ) {
    this.__confirmar( "post", url );
  }
}

// USO DE dlAjax.js
// ------------------------------
// peticion = new dlAjax("pre", {
//   "loading" : "cargando",
//   "success" : "success",
//   "error" : "error",
//   "state" : 3
// });

// var url = "./";

// peticion.get(url);