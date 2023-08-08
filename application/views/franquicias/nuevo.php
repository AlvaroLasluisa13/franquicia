<h1>Nuevas franquicias</h1>

<form class="" action="<?php echo site_url(); ?>/franquicias/guardar" method="post">

  <div class="row">
    <div class="col-md-6">
      <div class="col-md-5">

      </div>
      <div class="col-md-7">
        <label for="">Tipo:</label> <br>
        <select class="form-control" name="tipo_ajla" id="tipo_ajla"  class="form-control input-sm" required placeholder="SELECCIONE LA SUCURSAL">
          <option>Nuevo</option>slot
          <option> Antiguo</option>slot
        </select>
        <br>
    </div>
    <div class="row">
      <div class="col-md-5">
         <label for="">Lugar:</label>
         <br>
         <input type="text" class="form-control" name="lugar_ajla" id="lugar_ajla" placeholder="Ingrese lugar">
      </div>
      <div class="col-md-5">
        <label for="">telefono:</label>
        <br>
        <input type="text" class="form-control"name="telefono_ajla" id="telefono_ajla" placeholder="Ingrese telefonoa">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <label for="">Propietario:</label>
          <br>
          <input type="text" class="form-control" name="propietario_ajla" id="propietario_ajla" placeholder="Ingrese propietario">
        </div>
        <div class="col-md-4">
          <label for="">Latitud:</label>
          <br>
          <input type="float" class="form-control" name="latitud_ajla" id="latitud_ajla" placeholder="Latitud">
        </div>
        <div class="col-md-4">
          <label for="">Longitud:</label>
          <br>
          <input type="float" class="form-control" name="longitud_ajla" id="longitud_ajla" placeholder="Longitud">
        </div>
      </div>
        <br>

    </div>
    <div class="col-md-6">
      <div id="mapaUbicacion" style="height:300px; width:100%; border:2px solid black;">

      </div>
    </div>
  </div>
    <br><br><br>
  <div class="row">
    <div class="col-md-12 text-center">
      <button type="submit" name="button" class="btn btn-primary">Guardar</button>&nbsp;
      <a href="<?php echo site_url(); ?>/franquicias/index" class="btn btn-danger">Cancelar </a>
    </div>

  </div>

  <!-- imporytacion de mapaajlaente -->
  <script type="text/javascript">
function initMap(){
    var centro=new google.maps.LatLng(-1.6192424073977898,-78.59470903782957);
    var mapa1=new google.maps.Map(document.getElementById('mapaUbicacion'),
  {
    center:centro,
    zoom:7,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  }
  );
var marcador=new google.maps.Marker({
  position:centro,
  map:mapa1,
  title:"Seleccione la direccion",
//icon:"ruta",
  draggable:true
  });
  google.maps.event.addListener(marcador,'dragend',function(){
  //alert("Se termino el Drag");
  document.getElementById('latitud_ajla').value=this.getPosition().lat();
  document.getElementById('longitud_ajla').value=  this.getPosition().lng();
  });
  }//cierre de la funcion initMap
</script>

</form>
