<?php

class Ecuadores extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Ecuador");
  }
  public function direccion()
  {
    $data["ecuadores"]=$this->Ecuador->obtenerTodosEcuador();
    $this->load->view('header');
    $this->load->view('ecuadores/direccion',$data);
    $this->load->view('footer');
  }
}

 ?>
