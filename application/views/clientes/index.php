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
 			<?php if ($clientes): ?>
 					<?php foreach ($clientes as $temporalCliente):?>
 					//para que no salga un mapa encima de otro
 					var coordenadaTempo=new google.maps.LatLng(<?php echo $temporalCliente->latitud_cli; ?>,
 						<?php echo $temporalCliente->longitud_cli; ?>);
 						var marcador=new google.maps.Marker({
 							//formato de jeyson
 							position:coordenadaTempo,
 							title:"<?php echo $temporalCliente->nombre_cli;?>",
 							map:mapaDireccionesClientes,
 							icon:"<?php echo base_url();?>/assets/imagen/ico3.png"
 						});
 					<?php endforeach; ?>
 		  	<?php endif; ?>

 		}//cierre de la clase con la funcion initMap
 		</script>
<!-- LISTADO DE CLIENTES -->
<div class="row">
  <div class="col-md-8">
    <h1>Clientes</h1>
    <br>
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('clientes/nuevo')?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar clientes nuevos
    </a>
  </div>
</div>

<?php if ($clientes):?>
   <table class="table table-striped table-bordered table-hover">
     <thead>
       <tr>
         <th>ID:</th>
         <th>SUCURSAL:</th>
         <th>NOMBRE:</th>
         <th>APELLIDO:</th>
         <th>CIUDAD:</th>
         <th>LATITUD</th>
         <th>LONGITUD</th>
				 <th>PEDIDO</th>
         <th>FECHA</th>
				 <th>ACCIONES</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($clientes as $filaTemporal): ?>
       <tr>
         <td><?php echo $filaTemporal->id_cli;?></td>
         <td><?php echo $filaTemporal->sucursal_cli;?></td>
         <td><?php echo $filaTemporal->nombre_cli;?></td>
         <td><?php echo $filaTemporal->apellido_cli;?></td>
         <td><?php echo $filaTemporal->ciudad_cli;?></td>
         <td><?php echo $filaTemporal->latitud_cli;?></td>
         <th><?php echo $filaTemporal->longitud_cli;?></th>
				 <th><?php echo $filaTemporal->pedido_cli; ?></th>
         <th><?php echo $filaTemporal->fecha_cli; ?></th>
         <td class="text-center">
					 <a href="<?php echo site_url();?>/clientes/eliminar/<?php echo $filaTemporal->id_cli;?>" title="borrar" onclick="return confirm ('¿Estas seguro de eliminar?');"> <i class="glyphicon glyphicon-trash"  style="color:red;"> </i> </a>
        </td>
       </tr>
     <?php endforeach;?>
          </tbody>

   </table>
<?php else: ?>
  <h1>No hay datos</h1>
<?php endif; ?>
