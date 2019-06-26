$('#alcance').change(function() {
  $.post('ajax_fundamento.php',{
    alcance:$('#alcance').val(),

    beforeSend: function() {
      $('.res_fundamento').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_fundamento').html(respuesta);
    });
  });
