<?php
    class Ecuador extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodosEcuador(){

            $ListadosDirecciones=$this->db->select()->where('sucursal_cli', 'Ecuador')->get("cliente");
            if ($ListadosDirecciones->num_rows()>0){
               return $ListadosDirecciones->result();
                // print_r($ListadosDirecciones->result());
            }
            return false;
        }

    }//cierre de la clase
?>
