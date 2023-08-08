<?php
  class Franquicia extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    function insertar($datos){
        //Active record en CodeIgniter
        return $this->db->insert('franquicia_ajla',$datos);
    }

    function obtenerTodos(){
        $listadoFranquicias=$this->db->get("franquicia_ajla");
        if ($listadoFranquicias->num_rows()>0) {
          return $listadoFranquicias->result();
        } else {
          return false;
        }
    }
    //borrar cliidentes
    function borrar($int_ajla){
    $this->db->where("int_ajla",$int_ajla);
    if ($this->db->delete("franquicia_ajla")) {
      return true;
    } else {
      return false;
    }
  }

  function obtenerPorId($int_ajla){
  $this->db->where("int_ajla",$int_ajla);
  $franquicias=$this->db->get("franquicia_ajla");
  if($franquicias->num_rows()>0){
    return $franquicias->row();
  }
    return false;
}

function actualizar($int_ajla,$datos){
    $this->db->where("int_ajla",$int_ajla);
    return $this->db->update("franquicia_ajla",$datos);
}

  }//cierre de la clase
 ?>
