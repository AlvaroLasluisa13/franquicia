<?php

class Nuevos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Nuevo");
  }
  public function direccion()
  {
    $data["nuevos"]=$this->Nuevo->obtenerTodosNuevo();
    $this->load->view('header');
    $this->load->view('nuevos/direccion',$data);
    $this->load->view('footer');
  }
}

 ?>
