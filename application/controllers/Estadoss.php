<?php

class Estadoss extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Estado");
  }
  public function direccion()
  {
    $data["estadoss"]=$this->Estado->obtenerTodosEstado();
    $this->load->view('header');
    $this->load->view('estadoss/direccion',$data);
    $this->load->view('footer');
  }
}

 ?>
