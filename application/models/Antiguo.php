<?php
    class Antiguo extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodosAntiguo(){

            $ListadosDirecciones=$this->db->select()->where('tipo_ajla','Antiguo')->get("franquicia_ajla");
            if ($ListadosDirecciones->num_rows()>0){
               return $ListadosDirecciones->result();
                // print_r($ListadosDirecciones->result());
            }
            return false;
        }

    }//cierre de la clase
?>
