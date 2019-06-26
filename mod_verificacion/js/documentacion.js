$('#funda').change(function() {
  $.post('ajax_documentacion.php',{
    funda:$('#funda').val(),

    beforeSend: function() {
      $('.res_funda').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_funda').html(respuesta);
    });
  });
