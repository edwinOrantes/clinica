<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view("Base/content");
		$this->load->view("Base/footer");
	}

	/* public function validar_usuario(){
		$inputs = $this->input->post();
		$params = array('nombreUsuario' => $inputs['nombreUsuario'], 'psUsuario' => md5($inputs['psUsuario']));
		$datos = $this->Usuarios_Model->validarUsuario($params);
		if ($datos['estado'] == 1) {
			
			$userName = explode(" ", $datos["datos"]->nombreEmpleado);
			$lastName = explode(" ", $datos["datos"]->apellidoEmpleado);
			$ses = array(
				'usuario_h'=> $datos["datos"]->nombreUsuario,
				'id_usuario_h'=> $datos["datos"]->idUsuario,
				'id_empleado_h'=> $datos["datos"]->idEmpleado,
				'acceso_h'=> $datos["datos"]->idAcceso,
				'empleado_h'=> $userName[0]." ".$lastName[0], 	
				'acceso_nombre'=> $datos["datos"]->nombreAcceso,
				'valido'=> TRUE,
				'nacimiento'=> $datos["datos"]->nacimientoEmpleado,
				'verificacion'=> $datos["datos"]->codigoVerificacion,
				'nivel'=> $datos["datos"]->nivelUsuario,
			);

			$this->session->set_userdata($ses);
			$this->session->set_flashdata("exito", "Bienvenido nuevamente: ".$this->session->userdata('empleado_h')."");
			// Agregando evento a bitacora
				$data["idUsuario"] = $this->session->userdata('id_usuario_h');
				$data["descripcionBitacora"] = "El usuario: ".$this->session->userdata('usuario_h')." Ha iniciado sesión";
				$this->Usuarios_Model->insertarBitacora($data);
			// Mandando a cada usuario a su respectivo lugar
			switch ($datos["datos"]->idAcceso) {
				case 1:
					redirect(base_url()."Usuarios/dashboard");
					break;
				case 8:
					redirect(base_url()."Consultas/consultas_pendientes");
					break;
					
				case 5:
					redirect(base_url()."Usuarios/dashboard");
					break;

				case 9:
					redirect(base_url()."Usuarios/dashboard");
					break;
				
				case 15:
					redirect(base_url()."Botiquin/precios_medicamentos/");
					break;

				case 16:
					redirect(base_url()."InsumosLab/agregar_compra/");
					break;
					
				default:
					redirect(base_url()."Hoja/");
					break;
			}
		}
		else{
			$this->session->set_flashdata("error", "Los datos ingresados son incorrectos");
			redirect(base_url());
		} 


			
	} */
}