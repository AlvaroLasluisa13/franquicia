<div class="row">
  <div class="col-md-12">
    <div id="mapDir" style="width:100%; height:600px; border:2px solid black;"> </div>
  </div>
</div>

<script type="text/javascript">
function initMap(){
  var centro6=new google.maps.LatLng(-2.8967260022336436, -78.9974494790915);
  var mapaDestino = new google.maps.Map(document.getElementById('mapDir'), {
       zoom: 8,
       center: centro6,
       mapTypeId:google.maps.MapTypeId.HYBRID
     }
   );
   <?php if ($destino): ?>
       <?php foreach ($destino as $temporal):?>
       //para que no salga un mapa encima de otro
       var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_des; ?>,
         <?php echo $temporal->longitud_des; ?>);
         var marcador1=new google.maps.Marker({
           //formato de jeyson
           position:coordenada,
           title:"<?php echo $temporal->nombre_des;?>",
           map:mapaDestino,
           icon:"<?php echo base_url();?>/assets/imagen/ico1.png"
         });
         var coordenada=new google.maps.LatLng(<?php echo $temporal->latitudo_des; ?>,
           <?php echo $temporal->longitudo_des; ?>)
         var marcador2=new google.maps.Marker({
           //formato de jeyson
           position:coordenada,
           title:"<?php echo $temporal->nombreo_des;?>",
           map:mapaDestino,
           icon:"<?php echo base_url();?>/assets/imagen/ico1.png"
         });
       <?php endforeach; ?>
     <?php endif; ?>
}
</script>


<!-- mapa destino -->
<br><br>
<div class="row">
  <div class="col-md-8">
    <h1>DESTINOS DE ENTREGA</h1> <br>
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('destinos/nuevo')?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar nueva entrega
    </a>
  </div>
</div>

<?php if ($destino):?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>ID:</th>
        <th>NOMBRE:</th>
        <th>APELLIDO:</th>
        <th>CIUDAD:</th>
        <th>LATITUD :</th>
        <th>LONGITUD:</th>
        <th>DESCRIPCION PROD:</th>
        <th>FECHA:</th>
        <th>NOMBRE:</th>
        <th>APELLIDO:</th>
        <th>CIUDAD:</th>
        <th>LATITUD :</th>
        <th>LONGITUD:</th>
        <th>FECHA:</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($destino as $filaTemporal): ?>
      <tr>
        <td><?php echo $filaTemporal->id_des;?></td>
        <td><?php echo $filaTemporal->nombreo_des;?></td>
        <td><?php echo $filaTemporal->apellidoo_des;?></td>
        <td><?php echo $filaTemporal->ciudado_des;?></td>
        <td><?php echo $filaTemporal->latitudo_des;?></td>
        <th><?php echo $filaTemporal->longitudo_des;?></th>
        <th><?php echo $filaTemporal->pedido_des; ?></th>
        <td><?php echo $filaTemporal->fechao_des;?></td>
      <td><?php echo $filaTemporal->nombre_des;?></td>
      <td><?php echo $filaTemporal->apellido_des;?></td>
      <td><?php echo $filaTemporal->ciudad_des;?></td>
      <td><?php echo $filaTemporal->latitud_des;?></td>
      <th><?php echo $filaTemporal->longitud_des;?></th>
      <td><?php echo $filaTemporal->fecha_des;?></td>

        <td class="text-center">
          <a href="<?php echo site_url();?>/destinos/eliminar/<?php echo $filaTemporal->id_des;?>" title="borrar" onclick="return confirm ('¿Estas seguro de eliminar?');"> <i class="glyphicon glyphicon-trash"  style="color:red;"> </i> </a>
       </td>
    </tr>
    <?php endforeach;?>
    </tbody>
  </table>


<?php else: ?>
  <h1>No hay datos</h1>
<?php endif; ?>
