<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCliente extends CI_Controller {

	public function autenticar()
	{
		$this->session->unset_userdata("administrador");
		$this->session->unset_userdata("usuario_logado");
		$this->session->unset_userdata("nome");
		
		$this->load->model("cliente_model");
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$cliente = $this->cliente_model->logarCliente($email, $senha);
		if($cliente){
			$this->session->set_userdata("usuario_logado", $cliente);
			$this->session->flashdata("success");
			
			$this->session->set_userdata("nome", $cliente['nome']);
			redirect('welcome');
		}else{
			$this->session->set_userdata("nao_logado", true);
			$this->session->flashdata("danger");
			redirect('logincliente');
		}
	}
	
	public function logout(){
		$this->session->unset_userdata("usuario_logado");
		$this->session->unset_userdata("nome");
		$this->session->unset_userdata("administrador");
		redirect('welcome');
	}
}
