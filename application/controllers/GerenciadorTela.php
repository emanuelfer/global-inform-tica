<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GerenciadorTela extends CI_Controller {
	
	public function paginaCompra()
	{
		$this->load->model("produto_model");
		$lista = $this->produto_model->buscaTodos();
		$dados = array("produtos" => $lista);
		$this->load->view('compra/paginacompra', $dados);
	}
	
	public function loginCliente()
	{
		$this->load->view('login/indexcliente');
	}
	
	public function loginAdministrador()
	{
		$this->load->view('login/indexadministrador');
	}
	
	public function administracao(){
		$this->load->view('administracao/areaadministracao');
	}
	
	public function cadastro(){
		$this->load->view('cadastro/cadastro');
	}
	
	public function pesquisar(){
		$this->load->view('pesquisar/pesquisar');
	}
	
	public function detalhe(){
		$this->load->view('produto/detalhe');
	}
	
	public function editar(){
		$this->load->view('produto/editar');
	}
	public function sobreNos(){
		$this->load->view('sobrenos');
	}
	
	public function exibirDesejos(){
		$this->load->model("produto_model");
		$usuario = $this->session->userdata("usuario_logado");
		$lista = $this->produto_model->buscaDesejos($usuario);
		$dados = array("produtos" => $lista);
		//echo var_dump($dados);
		$this->load->view('produto/desejos', $dados);
	}
}
