 $('.modal').modal();

  function enviar(valor) {
   $.get('modal_uno.php',{
     id:valor,

     beforeSend: function() {
       $('.res_modal_uno').html("Espere un momento por favor...");
       }
     },function(respuesta) {
       $('.res_modal_uno').html(respuesta);
     });
   }


   function enviard(valor) {
    $.get('modal_dos.php',{
      id:valor,

      beforeSend: function() {
        $('.res_modal_dos').html("Espere un momento por favor...");
        }
      },function(respuesta) {
        $('.res_modal_dos').html(respuesta);
      });
    }

    function enviart(valor) {
     $.get('modal_tres.php',{
       id:valor,

       beforeSend: function() {
         $('.res_modal_tres').html("Espere un momento por favor...");
         }
       },function(respuesta) {
         $('.res_modal_tres').html(respuesta);
       });
     }

     function enviarc(valor) {
      $.get('modal_cuatro.php',{
        id:valor,

        beforeSend: function() {
          $('.res_modal_cuatro').html("Espere un momento por favor...");
          }
        },function(respuesta) {
          $('.res_modal_cuatro').html(respuesta);
        });
      }

      function enviars(valor) {
       $.get('modal_cinco.php',{
         id:valor,

         beforeSend: function() {
           $('.res_modal_cinco').html("Espere un momento por favor...");
           }
         },function(respuesta) {
           $('.res_modal_cinco').html(respuesta);
         });
       }

    
