$('#empresa1').change(function() {
  $.post('ajax_vgcf.php',{
    empresa:$('#empresa1').val(),

    beforeSend: function() {
      $('.res_vgcf').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_vgcf').html(respuesta);
    });
  });
