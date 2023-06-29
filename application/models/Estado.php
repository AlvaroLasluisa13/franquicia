<?php
    class Estado extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodosEstado(){

            $ListadosDirecciones=$this->db->select()->where('sucursal_cli', 'Estados Unidos')->get("cliente");
            if ($ListadosDirecciones->num_rows()>0){
               return $ListadosDirecciones->result();
                // print_r($ListadosDirecciones->result());
            }
            return false;
        }

    }//cierre de la clase
?>
