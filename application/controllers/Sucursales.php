<?php

class Sucursales extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model("Nuevo");
    $this->load->model("Antiguo");

  }
  public function direcciones()
  {
    $data["nuevos"]=$this->Nuevo->obtenerTodosNuevo();
    $data["antiguos"]=$this->Antiguo->obtenerTodosAntiguo();

    $this->load->view('header');
    $this->load->view('sucursales/direcciones',$data);
    $this->load->view('footer');
  }
}

 ?>
