<?php
    class Espana extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodosEspana(){

            $ListadosDirecciones=$this->db->select()->where('sucursal_cli', 'España')->get("cliente");
            if ($ListadosDirecciones->num_rows()>0){
               return $ListadosDirecciones->result();
                // print_r($ListadosDirecciones->result());
            }
            return false;
        }

    }//cierre de la clase
?>
