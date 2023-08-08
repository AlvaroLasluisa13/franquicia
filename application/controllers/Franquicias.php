<?php

  class Franquicias extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      //cargar modelo
      $this->load->model('Franquicia');
    }

  public function index()
   {
     $data['franquicia_ajla']=$this->Franquicia->obtenerTodos();
     $this->load->view('header');
     $this->load->view('franquicias/index',$data);
     $this->load->view('footer');
   }

   public function nuevo()
   {
     $this->load->view('header');
     $this->load->view('franquicias/nuevo');
     $this->load->view('footer');
   }

   public function guardar(){
     $datosNuevoFranquicia=array(
        "lugar_ajla"=>$this->input->post('lugar_ajla'),
        "telefono_ajla"=>$this->input->post('telefono_ajla'),
        "propietario_ajla"=>$this->input->post('propietario_ajla'),
        "tipo_ajla"=>$this->input->post('tipo_ajla'),
        "latitud_ajla"=>$this->input->post('latitud_ajla'),
       "longitud_ajla"=>$this->input->post('longitud_ajla'),
      );
      if ($this->Franquicia->insertar($datosNuevoFranquicia))
      {
        redirect ('franquicias/index');
      }else {
        echo "<h1>Error al insertar</h1>";
      }
   }
   //funcion para terminar clientes
   public function eliminar($int_ajla){
     if ($this->Franquicia->borrar($int_ajla)) {
       redirect('franquicias/index');
     }else {
       echo "ERROR AL BORRAR :(";
     }

    public function editar($int_ajla){
       $data["FranquiciasEditar"]=$this->Franquicia->obtenerPorId($int_ajla);
       $this->load->view("header");
       $this->load->view("franquicias/edita",$data);
       $this->load->view("footer");
     }

   public function procesarActualizar(){
   $datosFranquiciasEditados=array(
     "lugar_ajla"=>$this->input->post('lugar_ajla'),
     "telefono_ajla"=>$this->input->post('telefono_ajla'),
     "propietario_ajla"=>$this->input->post('propietario_ajla'),
     "tipo_ajla"=>$this->input->post('tipo_ajla'),
     "latitud_ajla"=>$this->input->post('latitud_ajla'),
    "longitud_ajla"=>$this->input->post('longitud_ajla'),
 );
   $int_ajla=$this->input->post("int_ajla");
   if ($this->Franquicia->actualizar($int_ajla,$datosFranquiciasEditados)) {
     redirect('franquicias/index');
   }else{
     echo "ERROR";
     }
   }


 }
 ?>
