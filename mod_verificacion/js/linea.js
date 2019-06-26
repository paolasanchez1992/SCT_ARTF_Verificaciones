$('#li').change(function() {
  $.post('ajax_linea.php',{
    li:$('#li').val(),

    beforeSend: function() {
      $('.res_linea').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_linea').html(respuesta);
    });
  });
