<h1 class="text-center"> NUEVAS ENTREGAS</h1>
<br><br>
<form class="" action="<?php echo site_url(); ?>/destinos/guardar" method="post">
  <div class="row">
    <div class="col-md-6">
      <div class="col-md-3"></div>
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Ingrese datos de origen</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
         <label for="">Nombre:</label>
         <br>
         <input type="text" class="form-control" name="nombreo_des" id="nombreo_des" placeholder="Ingrese en nombre">
      </div>
      <div class="col-md-4">
        <label for="">Apellido:</label>
        <br>
        <input type="text" class="form-control"name="apellidoo_des" id="apellidoo_des" placeholder="Ingrese apellidos">
        </div>
        <div class="col-md-4">
          <label for="">Ciudad:</label>
          <br>
          <input type="text" class="form-control" name="ciudado_des" id="ciudado_des" placeholder="Ingrese Ciudad">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <label for="">Latitud:</label>
          <br>
          <input type="float" class="form-control" name="latitudo_des" id="latitudo_des" placeholder="Latitud">
        </div>
        <div class="col-md-4">
          <label for="">Longitud:</label>
          <br>
          <input type="float" class="form-control" name="longitudo_des" id="longitudo_des" placeholder="Longitud">
        </div>
        <div class="col-md-4">
          <label for="fecha_des">Fecha:</label>
          <br>
          <input type="date" value="2023-06-21" min="2023-05-01" max="2025-12-31" class="form-control" name="fechao_des" id="fechao_des" placeholder="Ingrese el fecha">
        </div>
      </div>
        <br>
      <div class="row">
        <div class="col-md-12">
          <label for="">Descripción envio:</label>
          <br>
          <input type="text" class="form-control" name="pedido_des" id="pedido_des" placeholder="Ingrese el pedido">
        </div>
    </div>
    </div>
    <div class="col-md-6">
      <div id="mapaDeso" style="height:300px; width:100%; border:2px solid black;">
      </div>
    </div>
  </div>
  <br><br>br
  <div class="row">
    <div class="col-md-6">
      <div class="col-md-3"></div>
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Ingrese datos de destinatario</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
         <label for="">Nombre:</label>
         <br>
         <input type="text" class="form-control" name="nombre_des" id="nombre_des" placeholder="Ingrese en nombre">
      </div>
      <div class="col-md-4">
        <label for="">Apellido:</label>
        <br>
        <input type="text" class="form-control"name="apellido_des" id="apellido_des" placeholder="Ingrese apellidos">
        </div>
        <div class="col-md-4">
          <label for="">Ciudad:</label>
          <br>
          <input type="text" class="form-control" name="ciudad_des" id="ciudad_des" placeholder="Ingrese Ciudad">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <label for="">Latitud:</label>
          <br>
          <input type="float" class="form-control" name="latitud_des" id="latitud_des" placeholder="Latitud">
        </div>
        <div class="col-md-4">
          <label for="">Longitud:</label>
          <br>
          <input type="float" class="form-control" name="longitud_des" id="longitud_des" placeholder="Longitud">
        </div>
        <div class="col-md-4">
          <label for="fecha_des">Fecha:</label>
          <br>
          <input type="date" value="2023-06-21" min="2023-05-01" max="2025-12-31" class="form-control" name="fecha_des" id="fecha_des" placeholder="Ingrese el fecha">
        </div>
      </div>
        <br>
    </div>
    <div class="col-md-6">
      <div id="mapaDestino" style="height:300px; width:100%; border:2px solid black;">
      </div>
    </div>
  </div>


    <br><br><br>
  <div class="row">
    <div class="col-md-12 text-center">
      <button type="submit" name="button" class="btn btn-primary">Guardar</button>&nbsp;
      <a href="<?php echo site_url();?>/destinos/nuevo" class="btn btn-danger">Cancelar </a>
    </div>

  </div>

  <!-- imporytacion de mapaCliente -->
  <script type="text/javascript">
function initMap(){
    var centro=new google.maps.LatLng(-1.6192424073977898,-78.59470903782957);
    var mapa=new google.maps.Map(document.getElementById('mapaDeso'),
  {
    center:centro,
    zoom:7,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  }
  );
var marcador=new google.maps.Marker({
  position:centro,
  map:mapa,
  title:"Seleccione la direccion",
//icon:"ruta",
  draggable:true
  });
  google.maps.event.addListener(marcador,'dragend',function(){
  //alert("Se termino el Drag");
  document.getElementById('latitudo_des').value=this.getPosition().lat();
  document.getElementById('longitudo_des').value=this.getPosition().lng();
  });

  var centro1=new google.maps.LatLng(-1.6192424073977898,-78.59470903782957);
  var mapa1=new google.maps.Map(document.getElementById('mapaDestino'),
  {
    center:centro1,
    zoom:7,
    mapTypeId:google.maps.MapTypeId.HYBRID
  }
  );
  var marcador1=new google.maps.Marker({
    position:centro1,
    map:mapa1,
    title:"Seleccione la direccion de destino",
    draggable:true
    });
    google.maps.event.addListener(marcador1,'dragend',function(){
    //alert("Se termino el Drag");
    document.getElementById('latitud_des').value=this.getPosition().lat();
    document.getElementById('longitud_des').value=this.getPosition().lng();
    });

  }//cierre de la funcion initMap
</script>

</form>
