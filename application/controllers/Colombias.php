<?php

class Colombias extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Colombia");
  }
  public function direccion()
  {
    $data["colombias"]=$this->Colombia->obtenerTodosColombia();
    $this->load->view('header');
    $this->load->view('colombias/direccion',$data);
    $this->load->view('footer');
  }
}

 ?>
