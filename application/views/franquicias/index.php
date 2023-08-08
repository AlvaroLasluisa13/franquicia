<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrsdwYvTuKxgkmkZjme4WXEYTW1wRdEVI&callback=initMap" ></script>
 -->
 		<div class="row">
 			<div class="col-md-12">
 				<div id="mapaCliente" style="width:100%; height:600px;border:2px solid black;">
 				</div>
 			</div>
 		</div>
 		<script type="text/javascript">
 			function initMap(){
 				var centro6=new google.maps.LatLng(-2.8967260022336436, -78.9974494790915);
 				var mapaDireccionesClientes=new google.maps.Map(document.getElementById('mapaCliente'),
 				{
 					center:centro6,
 					zoom:3,
 					mapTypeId:google.maps.MapTypeId.HYBRID
 				}

 			);//mapa
 			// codigo para la creacion de marcadores
 			<?php if ($franquicia_ajla): ?>
 					<?php foreach ($franquicia_ajla as $temporalFranquicia):?>
 					//para que no salga un mapa encima de otro
 					var coordenadaTempo=new google.maps.LatLng(<?php echo $temporalFranquicia->latitud_ajla; ?>,
 						<?php echo $temporalFranquicia->longitud_ajla; ?>);
 						var marcador=new google.maps.Marker({
 							//formato de jeyson
 							position:coordenadaTempo,
 							title:"<?php echo $temporalFranquicia->lugar_ajla;?>",
 							map:mapaDireccionesClientes,
 							icon:"<?php echo base_url();?>/assets/imagen/kfc.png"
 						});
 					<?php endforeach; ?>
 		  	<?php endif; ?>

 		}//cierre de la clase con la funcion initMap
 		</script>
<!-- LISTADO DE CLIENTES -->
<div class="row">
  <div class="col-md-8">
    <h1>FRANQUICIAS</h1>
    <br>
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('franquicias/nuevo')?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar nuevas franquicias
    </a>
  </div>
</div>

<?php if ($franquicias):?>
   <table class="table table-striped table-bordered table-hover">
     <thead>
       <tr>
         <th>ID:</th>
         <th>LUGAR:</th>
         <th>TELEFONO:</th>
         <th>PROPIETARIO:</th>
         <th>TIPO:</th>
         <th>LATITUD</th>
         <th>LONGITUD</th>
				 <th>ACCIONES</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($franquicias as $filaTemporal): ?>
       <tr>
         <td><?php echo $filaTemporal->int_ajla;?></td>
         <td><?php echo $filaTemporal->lugar_ajla;?></td>
         <td><?php echo $filaTemporal->telefono_ajla;?></td>
         <td><?php echo $filaTemporal->propietario_ajla;?></td>
         <td><?php echo $filaTemporal->tipo_ajla;?></td>
         <td><?php echo $filaTemporal->latitud_ajla;?></td>
         <th><?php echo $filaTemporal->longitud_ajla;?></th>
         <td class="text-center">
                   <a href="<?php echo site_url() ?>/franquicias/editar/<?php echo $filaTemporal->int_ajla; ?>" title="Editar " onclick="return confirm('¿Estas seguro de editar este elemento?');" style="color:orange;">
                    <i class="mdi mdi-border-color"></i>
                    EDITAR
                   &nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="<?php echo site_url() ?>/franquicias/eliminar/<?php echo $filaTemporal->int_ajla; ?>" title="Eliminar " onclick="return confirm('¿Estas seguro de eliminar este elemento?');" style="color:red;">
                    <i class="mdi mdi-cup"></i>
                    ELIMINAR
                   </a>
                 </td>
       </tr>
     <?php endforeach;?>
          </tbody>

   </table>
<?php else: ?>
  <h1>No hay datos</h1>
<?php endif; ?>
