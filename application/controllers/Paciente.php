<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('America/El_Salvador');
       /*  if ($this->session->has_userdata('valido')){
			redirect(base_url()."Hoja/");
		}
		$this->load->model("Usuarios_Model"); */
	}

	public function index(){
		$this->load->view("Base/header");
		$this->load->view("Pacientes/agregar_paciente");
		$this->load->view("Base/footer");
	}

	public function guardar_paciente(){
		$datos = $this->input->post();

		echo json_encode($datos);
	}
}
