<?php

  class Destino extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    function insertar($datos){
      return $this->db->insert('destino',$datos);
    }
    function obtenerTodos(){
        $listadoDestinos=$this->db->get("destino");
        if ($listadoDestinos->num_rows()>0) {
          return $listadoDestinos->result();
        } else {
          return false;
        }
    }
    function borrar($id_des){
      $this->db->where("id_des",$id_des);
        return $this->db->delete("destino");
    }

    ///////////////

  }//cieere clase





 ?>
