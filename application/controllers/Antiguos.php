<?php

class Antiguos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Antiguo");
  }
  public function direccion()
  {
    $data["antiguos"]=$this->Antiguo->obtenerTodosAntiguo();
    $this->load->view('header');
    $this->load->view('antiguos/direccion',$data);
    $this->load->view('footer');
  }
}

 ?>
