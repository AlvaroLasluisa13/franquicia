<?php

  class Destinos extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      //cargar el imagecolordeallocate
      $this->load->model('Destino');
    }
    public function index()
    {
      $data['destino']=$this->Destino->obtenerTodos();
      $this->load->view('header');
      $this->load->view('destinos/index',$data);
      $this->load->view('footer');
    }

    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('destinos/nuevo');
      $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoDestino=array(
        'nombreo_des'=>$this->input->post('nombre_des'),
        'apellidoo_des'=>$this->input->post('apellidoo_des'),
        'ciudado_des'=>$this->input->post('ciudado_des'),
        'latitudo_des'=>$this->input->post('latitudo_des'),
        'longitudo_des'=>$this->input->post('longitudo_des'),
        'fechao_des'=>$this->input->post('fechao_des'),
        'nombre_des'=>$this->input->post('nombre_des'),
        'apellido_des'=>$this->input->post('apellido_des'),
        'ciudad_des'=>$this->input->post('ciudad_des'),
        'latitud_des'=>$this->input->post('latitud_des'),
        'longitud_des'=>$this->input->post('longitud_des'),
        'fecha_des'=>$this->input->post('fecha_des'),
      );
      if ($this->Destino->insertar($datosNuevoDestino))
       {
        redirect ('destinos/index');
      } else {
        echo " error al insertar datos";
      }
    }
    //eliminar destinos
    public function eliminar($id_des){
      if ($this->Destino->borrar($id_des)){
        redirect('destinos/index');
      }else{
        echo "error al borrar :P";
      }
    }
  } //cierre clase
 ?>
