$('#edo').change(function() {
  $.post('ajax_edo.php',{
    edo:$('#edo').val(),

    beforeSend: function() {
      $('.res_edo').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_edo').html(respuesta);
    });
  });
