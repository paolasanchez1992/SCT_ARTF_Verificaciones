$('#estado').change(function() {
  $.post('ajax_emp.php',{
    estado:$('#estado').val(),

    beforeSend: function() {
      $('.res_emp').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.res_emp').html(respuesta);
    });
  });
