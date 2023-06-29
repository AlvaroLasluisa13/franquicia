<h1>Nuevos Clientes</h1>

<form class="" action="<?php echo site_url(); ?>/clientes/guardar" method="post">

  <div class="row">
    <div class="col-md-6">
      <div class="col-md-5">

      </div>
      <div class="col-md-7">
        <label for="">Sucursales:</label> <br>
        <select class="form-control" name="sucursal_cli" id="sucursal_cli"  class="form-control input-sm" required placeholder="SELECCIONE LA SUCURSAL">
          <option> Ecuador</option>slot
          <option> España</option>slot
          <option> Colombia</option>slot
          <option> Estados Unidos</option>slot
          <option> Panamá </option>slot
        </select>
        <br>
    </div>
    <div class="row">
      <div class="col-md-5">
         <label for="">Nombre:</label>
         <br>
         <input type="text" class="form-control" name="nombre_cli" id="nombre_cli" placeholder="Ingrese en nombre">
      </div>
      <div class="col-md-5">
        <label for="">Apellido:</label>
        <br>
        <input type="text" class="form-control"name="apellido_cli" id="apellido_cli" placeholder="Ingrese apellidos">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <label for="">Ciudad:</label>
          <br>
          <input type="text" class="form-control" name="ciudad_cli" id="ciudad_cli" placeholder="Ingrese Ciudad">
        </div>
        <div class="col-md-4">
          <label for="">Latitud:</label>
          <br>
          <input type="float" class="form-control" name="latitud_cli" id="latitud_cli" placeholder="Latitud">
        </div>
        <div class="col-md-4">
          <label for="">Longitud:</label>
          <br>
          <input type="float" class="form-control" name="longitud_cli" id="longitud_cli" placeholder="Longitud">
        </div>
      </div>
        <br>
      <div class="row">
        <div class="col-md-5">
          <label for="">Pedidos:</label>
          <br>
          <input type="text" class="form-control" name="pedido_cli" id="pedido_cli" placeholder="Ingrese el pedido">
        </div>
        <div class="col-md-5">
          <label for="fecha_cli">Fecha:</label>
          <br>
          <input type="date" value="2023-06-21" min="2023-05-01" max="2025-12-31" class="form-control" name="fecha_cli" id="fecha_cli" placeholder="Ingrese el fecha">
        </div>
    </div>

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
      <a href="<?php echo site_url(); ?>/clientes/index" class="btn btn-danger">Cancelar </a>
    </div>

  </div>

  <!-- imporytacion de mapaCliente -->
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
  document.getElementById('latitud_cli').value=this.getPosition().lat();
  document.getElementById('longitud_cli').value=  this.getPosition().lng();
  });
  }//cierre de la funcion initMap
</script>

</form>
