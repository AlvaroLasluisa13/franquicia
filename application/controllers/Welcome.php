<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//renderizar las vistas
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');

	}
	public function nosotros()
	{
		$this->load->view('header');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}
}
 ?>
