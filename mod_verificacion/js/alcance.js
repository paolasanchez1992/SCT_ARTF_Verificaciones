$('#objeto').change(function() {
  $.post('ajax_alcance.php',{
    objeto:$('#objeto').val(),

    beforeSend: function() {
      $('.res_alcance').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_alcance').html(respuesta);
    });
  });
