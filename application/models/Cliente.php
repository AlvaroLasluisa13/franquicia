<?php
  class Cliente extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    function insertar($datos){
        //Active record en CodeIgniter
        return $this->db->insert('cliente',$datos);
    }

    function obtenerTodos(){
        $listadoClientes=$this->db->get("cliente");
        if ($listadoClientes->num_rows()>0) {
          return $listadoClientes->result();
        } else {
          return false;
        }
    }
    //borrar cliidentes
    function borrar($id_cli){
      $this->db->where("id_cli",$id_cli);
        return $this->db->delete("cliente");
    }
  }//cierre de la clase
 ?>
