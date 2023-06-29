<?php
    class Sucursal extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodosGeneral(){
            $ListadosDirecciones=$this->db->get("cliente");
            if ($ListadosDirecciones->num_rows()>0){
               return $ListadosDirecciones->result();
                // print_r($ListadosDirecciones->result());
            }
            return false;
        }

    }//cierre de la clase
?>
