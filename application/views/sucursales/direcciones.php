		<h1 class="text-center">DIRECCIONES GENERAL DE LAS SUCURSALES</h1>
		<div class="row">
			<div class="col-md-9">
  				<div id="mapaGeneral" style="width:100%; height:600px;border:2px solid black;">
  				</div>
        </div>
        <div class="col-md-3">
          <table class="table table-striped  table-bordered table-hover">
            <tr>
              <td>DIRECIONES GENERAL </td>
            </tr>
            <tr>
              <td><img src="<?php echo base_url();?>assets/imagen/kfc.png" alt="foto" height="60px" width="60px">
                nuevo
              </td>
            </tr>
            <tr>
              <td><img src="<?php echo base_url();?>assets/imagen/KFC1.jpeg" alt="foto" height="60px" width="60px">
                antiguas
              </td>
            </tr>

          </table>
        </div>
		</div>
		<script type="text/javascript">
			function initMap(){
				var centro3=new google.maps.LatLng(-2.8967260022336436, -78.9974494790915);
				var mapaDireccionGeneral=new google.maps.Map(document.getElementById('mapaGeneral'),
				{
					center:centro3,
					zoom:3,
					mapTypeId:google.maps.MapTypeId.HYBRID
				}

			);//mapa
			// codigo para la creacion de marcadores
      //ECUADOR
			<?php if ($nuevos): ?>
          <?php foreach ($nuevos as $temporal):?>
          //para que no salga un mapa encima de otro
          var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_ajla; ?>,
            <?php echo $temporal->longitud_ajla; ?>);
            var marcador1=new google.maps.Marker({
              //formato de jeyson
              position:coordenada,
              title:"<?php echo $temporal->lugar_ajla;?>",
              map:mapaDireccionGeneral,
              icon:"<?php echo base_url();?>/assets/imagen/kfc.png"
            });
          <?php endforeach; ?>
        <?php endif; ?>
				//ESPAÑA
				<?php if ($antiguos): ?>
			      <?php foreach ($antiguos as $temporal):?>
			      //para que no salga un mapa encima de otro
			      var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_ajla; ?>,
			        <?php echo $temporal->longitud_ajla; ?>);
			        var marcador1=new google.maps.Marker({
			          //formato de jeyson
			          position:coordenada,
			          title:"<?php echo $temporal->lugar_ajla;?>",
			          map:mapaDireccionGeneral,
			          icon:"<?php echo base_url();?>/assets/imagen/KFC1.jpeg"
			        });
			      <?php endforeach; ?>
			    <?php endif; ?>
				//ESTADOS UNIDOS
					}//cierre de la clase con la funcion initMap
		</script>
