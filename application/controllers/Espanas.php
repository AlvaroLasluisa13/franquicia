<?php

class Espanas extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Espana");
  }
  public function direccion()
  {
    $data["espanas"]=$this->Espana->obtenerTodosEspana();
    $this->load->view('header');
    $this->load->view('espanas/direccion',$data);
    $this->load->view('footer');
  }
}

 ?>
