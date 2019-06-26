$('#area').change(function() {
  $.post('ajax_objeto.php',{
    area:$('#area').val(),

    beforeSend: function() {
      $('.res_objeto').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_objeto').html(respuesta);
    });
  });
