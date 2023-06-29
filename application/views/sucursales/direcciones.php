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
              <td><img src="<?php echo base_url();?>assets/imagen/ico1.png" alt="foto" height="60px" width="60px">
                ECUADOR
              </td>
            </tr>
            <tr>
              <td><img src="<?php echo base_url();?>assets/imagen/ico2.png" alt="foto" height="60px" width="60px">
                ESPAÑA
              </td>
            </tr>
            <tr>
              <td><img src="<?php echo base_url();?>assets/imagen/ico3.png" alt="foto" height="60px" width="60px">
              ESTADOS UNIDOS
              </td>
            </tr>
						<tr>
							<td><img src="<?php echo base_url();?>assets/imagen/ico4.png" alt="foto" height="60px" width="60px">
							COLOMBIA
							</td>
						</tr>
						<tr>
							<td><img src="<?php echo base_url();?>assets/imagen/ico5.png" alt="foto" height="60px" width="60px">
							PANAMA
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
			<?php if ($ecuadores): ?>
          <?php foreach ($ecuadores as $temporal):?>
          //para que no salga un mapa encima de otro
          var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_cli; ?>,
            <?php echo $temporal->longitud_cli; ?>);
            var marcador1=new google.maps.Marker({
              //formato de jeyson
              position:coordenada,
              title:"<?php echo $temporal->nombre_cli;?>",
              map:mapaDireccionGeneral,
              icon:"<?php echo base_url();?>/assets/imagen/ico1.png"
            });
          <?php endforeach; ?>
        <?php endif; ?>
				//ESPAÑA
				<?php if ($espanas): ?>
			      <?php foreach ($espanas as $temporal):?>
			      //para que no salga un mapa encima de otro
			      var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_cli; ?>,
			        <?php echo $temporal->longitud_cli; ?>);
			        var marcador1=new google.maps.Marker({
			          //formato de jeyson
			          position:coordenada,
			          title:"<?php echo $temporal->nombre_cli;?>",
			          map:mapaDireccionGeneral,
			          icon:"<?php echo base_url();?>/assets/imagen/ico2.png"
			        });
			      <?php endforeach; ?>
			    <?php endif; ?>
				//ESTADOS UNIDOS
				<?php if ($estadoss): ?>
						<?php foreach ($estadoss as $temporal):?>
						//para que no salga un mapa encima de otro
						var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_cli; ?>,
							<?php echo $temporal->longitud_cli; ?>);
							var marcador1=new google.maps.Marker({
								//formato de jeyson
								position:coordenada,
								title:"<?php echo $temporal->nombre_cli;?>",
								map:mapaDireccionGeneral,
								icon:"<?php echo base_url();?>/assets/imagen/ico3.png"
							});
						<?php endforeach; ?>
					<?php endif; ?>
					//COLOMBIA
					<?php if ($colombias): ?>
							<?php foreach ($colombias as $temporal):?>
							//para que no salga un mapa encima de otro
							var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_cli; ?>,
								<?php echo $temporal->longitud_cli; ?>);
								var marcador1=new google.maps.Marker({
									//formato de jeyson
									position:coordenada,
									title:"<?php echo $temporal->nombre_cli;?>",
									map:mapaDireccionGeneral,
									icon:"<?php echo base_url();?>/assets/imagen/ico4.png"
								});
							<?php endforeach; ?>
						<?php endif; ?>
						//PANAMA
						<?php if ($panamas): ?>
								<?php foreach ($panamas as $temporal):?>
								//para que no salga un mapa encima de otro
								var coordenada=new google.maps.LatLng(<?php echo $temporal->latitud_cli; ?>,
									<?php echo $temporal->longitud_cli; ?>);
									var marcador1=new google.maps.Marker({
										//formato de jeyson
										position:coordenada,
										title:"<?php echo $temporal->nombre_cli;?>",
										map:mapaDireccionGeneral,
										icon:"<?php echo base_url();?>/assets/imagen/ico5.png"
									});
								<?php endforeach; ?>
							<?php endif; ?>
		}//cierre de la clase con la funcion initMap
		</script>
