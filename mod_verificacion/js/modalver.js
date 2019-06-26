function editcal(valor) {
 $.get('../subdireccion/modal_edcal.php',{
   id:valor,

   beforeSend: function() {
     $('.modal_ed').html("Espere un momento por favor...");
     }
   },function(respuesta) {
     $('.modal_ed').html(respuesta);
   });
 }

 function enviades(valor) {
  $.get('../verificacion/modal_descripcion.php',{
    id:valor,

    beforeSend: function() {
      $('.modal_des').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.modal_des').html(respuesta);
    });
  }
