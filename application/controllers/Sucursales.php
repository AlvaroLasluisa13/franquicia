<?php

class Sucursales extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model("Ecuador");
    $this->load->model("Espana");
    $this->load->model("Estado");
		$this->load->model("Colombia");
		$this->load->model("Panama");
  }
  public function direcciones()
  {
    $data["ecuadores"]=$this->Ecuador->obtenerTodosEcuador();
    $data["espanas"]=$this->Espana->obtenerTodosEspana();
    $data["estadoss"]=$this->Estado->obtenerTodosEstado();
		$data["colombias"]=$this->Colombia->obtenerTodosColombia();
		$data["panamas"]=$this->Panama->obtenerTodosPanama();
    $this->load->view('header');
    $this->load->view('sucursales/direcciones',$data);
    $this->load->view('footer');
  }
}

 ?>
