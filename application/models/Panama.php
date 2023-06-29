<?php
    class Panama extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodosPanama(){

            $ListadosDirecciones=$this->db->select()->where('sucursal_cli', 'Panama')->get("cliente");
            if ($ListadosDirecciones->num_rows()>0){
               return $ListadosDirecciones->result();
                // print_r($ListadosDirecciones->result());
            }
            return false;
        }

    }//cierre de la clase
?>
