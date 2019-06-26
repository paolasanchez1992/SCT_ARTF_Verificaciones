 $('.modal').modal();

function enviades(valor) {
 $.get('modal_despiv.php',{
 id:valor,
 beforeSend: function() {
 $('.modal_des').html("Espere un momento por favor...");
 }
},function(respuesta) {
$('.modal_des').html(respuesta);
});
}
