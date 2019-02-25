<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdministrador extends CI_Controller {

	public function autenticar()
	{
		$this->session->unset_userdata("administrador");
		$this->session->unset_userdata("usuario_logado");
		$this->session->unset_userdata("nome");
		
		$this->load->model("administrador_model");
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$administrador = $this->administrador_model->logarAdministrador($email, $senha);
		
		var_dump($administrador);
		if($administrador){
			$this->session->set_userdata("administrador", $administrador);
			$this->session->flashdata("success");
			$this->session->set_userdata("nome", $administrador['nome']);
			redirect('welcome');
			
		}else{
			$this->session->set_userdata("nao_logado", true);
			$this->session->flashdata("danger");
			redirect('loginadministrador');
		}
	}
	
	
}
