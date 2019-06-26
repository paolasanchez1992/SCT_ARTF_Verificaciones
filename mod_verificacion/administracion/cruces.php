<?php include '../extend/header.php'; ?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title">Titulo</span>

      <div id="mapa" style="width:100%;height:360px;"></div>





    </div>
   </div>
  </div>
</div>

<?php include '../extend/scripts.php'; ?>
<script type="text/javascript">
        var bcn = new google.maps.LatLng(41.3797362,2.1730737);
        var mapOptions = {
            center: bcn,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
        map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
</script>

</body>
</html>
