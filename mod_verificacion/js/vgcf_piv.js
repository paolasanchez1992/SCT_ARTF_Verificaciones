$('#emp').change(function() {
  $.post('ajax_vgcf.php',{
    emp:$('#emp').val(),

    beforeSend: function() {
      $('.res_vgcf').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_vgcf').html(respuesta);
    });
  });
