<?php

  class Clientes extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      //cargar modelo
      $this->load->model('Cliente');
    }

  public function index()
   {
     $data['clientes']=$this->Cliente->obtenerTodos();
     $this->load->view('header');
     $this->load->view('clientes/index',$data);
     $this->load->view('footer');
   }

   public function nuevo()
   {
     $this->load->view('header');
     $this->load->view('clientes/nuevo');
     $this->load->view('footer');
   }

   public function guardar(){
     $datosNuevoCliente=array(
        "sucursal_cli"=>$this->input->post('sucursal_cli'),
        "nombre_cli"=>$this->input->post('nombre_cli'),
        "apellido_cli"=>$this->input->post('apellido_cli'),
        "ciudad_cli"=>$this->input->post('ciudad_cli'),
        "latitud_cli"=>$this->input->post('latitud_cli'),
       "longitud_cli"=>$this->input->post('longitud_cli'),
       "pedido_cli"=>$this->input->post('pedido_cli'),
       "fecha_cli"=>$this->input->post('fecha_cli'),
      );
      //$this->Instructor->insertar($datosNuevo);
      if ($this->Cliente->insertar($datosNuevoCliente))
      {
        redirect ('clientes/index');
      }else {
        echo "<h1>Error al insertar</h1>";
      }
   }
   //funcion para terminar clientes
   public function eliminar($id_cli){
     if ($this->Cliente->borrar($id_cli)) {
       redirect('clientes/index');
     }else {
       echo "ERROR AL BORRAR :(";
     }

   }
 }
 ?>
