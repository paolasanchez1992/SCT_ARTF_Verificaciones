$('#fecha').change(function() {
  $.post('ajax_fecha.php',{
    fecha:$('#fecha').val(),

    beforeSend: function() {
      $('.res_fecha').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_fecha').html(respuesta);
    });
  });

  $('#fechaf').change(function() {
    $.post('ajax_fecha1.php',{
      fechaf:$('#fechaf').val(),

      beforeSend: function() {
        $('.res_fecha1').html("Espere un momento por favor...");
        }
      },function(respuesta) {
        $('.res_fecha1').html(respuesta);
      });
    });
