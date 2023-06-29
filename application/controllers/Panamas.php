<?php

class Panamas extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Panama");
  }
  public function direccion()
  {
    $data["panamas"]=$this->Panama->obtenerTodosPanama();
    $this->load->view('header');
    $this->load->view('panamas/direccion',$data);
    $this->load->view('footer');
  }
}

 ?>
