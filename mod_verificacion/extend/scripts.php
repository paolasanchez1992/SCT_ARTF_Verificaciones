</main>
<!-- mandaos a traer el jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- mandaos a traer el js de materialize -->
<script src="../js/materialize.min.js"></script>
<!-- mandaos a traer el js de sweetalert2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.min.js"></script>
<script>

  $(".button-collapse").sideNav();
  $('select').material_select();
  $(".dropdown-trigger").dropdown();


  $(document).ready(function(){
   $('.modal').modal();
 });

 $('.datepicker').pickadate({
 format: 'yyyy-mm-dd',
 language: "es",
 selectMonths: true, // Creates a dropdown to control month
 selectYears: 150, // Creates a dropdown of 15 years to control year,
 today: 'Día actual',
 clear: 'Limpiar',
 close: 'Ok',
 closeOnSelect: true // Close upon selecting a date,
});

$(document).ready(function(){
  $('.tooltipped').tooltip({delay: 50});
});

  function may(obj, id) {
  obj = obj.toUpperCase();
  document.getElementById(id).value = obj;
}

$('#buscar').keyup(function(event) {
  var contenido = new RegExp($(this).val(), 'i');
  $('tr').hide();
  $('tr').filter(function() {
    return contenido.test($(this).text());
  }).show();
  $('.cabecera').attr('style','');
});


</script>
