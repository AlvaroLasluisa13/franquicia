<h1 class="text-center">DIRECCIONES DE LA SUCURSAL DE ESPAÑAS </h1>
<div class="row">
  <div class="col-md-12">
    <div id="mapaEspana" style="width:100%; height:600px;border:2px solid black;">
    </div>
  </div>
</div>
<script type="text/javascript">
  function initMap(){
    var centro1=new google.maps.LatLng(-2.8967260022336436, -78.9974494790915);
    var mapaDireccionesEspana=new google.maps.Map(document.getElementById('mapaEspana'),
    {
      center:centro1,
      zoom:3,
      mapTypeId:google.maps.MapTypeId.HYBRID
    }

  );//mapa
  // codigo para la creacion de marcadores
  <?php if ($espanas): ?>
      <?php foreach ($espanas as $temporal):?>
      //para que no salga un mapa encima de otro
      var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_cli; ?>,
        <?php echo $temporal->longitud_cli; ?>);
        var marcador1=new google.maps.Marker({
          //formato de jeyson
          position:coordenada,
          title:"<?php echo $temporal->nombre_cli;?>",
          map:mapaDireccionesEspana,
          icon:"<?php echo base_url();?>/assets/imagen/ico2.png"
        });
      <?php endforeach; ?>
    <?php endif; ?>

}//cierre de la clase con la funcion initMap
</script>
