<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function cadastrar(){
		$mensagem = uploadImagem();
		if($mensagem == 'sucesso'){
			$produto = array(
				"nome" => $this->input->post("nome"),
				"preco" => $this->input->post("preco"),
				"especificacao" => $this->input->post("especificacao"),
				"descricao" => $this->input->post("descricao"),
				"foto" => $_FILES['arquivo']['name']
			);
			$this->load->model("produto_model");
			$this->produto_model->cadastrar($produto);
			$this->session->set_flashdata("success", "Produto Cadastrado com sucesso!");
		}else{
			$this->session->set_flashdata("danger", $mensagem);
		}	
		redirect('cadastro');
	}
	
	public function detalhe(){
		$id = $this->input->get("id");
		$this->load->model("produto_model");
		$produto = $this->produto_model->retorna($id);
		$dados = array("produto" => $produto);
		
		$usuario = $this->session->userdata("usuario_logado");
		if($this->produto_model->buscaDesejo($id, $usuario)!=null){
			$this->session->set_userdata('desejo', true);
		}
		else{
			$this->session->set_userdata('desejo', false);
		}
		
		$this->load->view("produto/detalhe", $dados);
	}
	
	function pesquisar(){
		$nome = $this->input->post("nome");
		$this->load->model("produto_model");
		$produtos = $this->produto_model->pesquisar($nome);
		$dados = array("produtos" => $produtos);
		$this->load->view("pesquisar/pesquisar", $dados);
	}
	
	public function deletar($id){
		$this->load->model("produto_model");
		$this->produto_model->deletar($id);
		$this->session->set_flashdata('success', 'Produto deletado com sucesso!');
		redirect('compra');
	}
	
	public function editar(){
		$id = $this->input->get("id");
		$this->load->model("produto_model");
		$produto = $this->produto_model->retorna($id);
		$dados = array("produto" => $produto);
		
		$this->load->view("produto/editar", $dados);
	}
	
	public function salvar(){
		$id = $this->input->get("id");
		$mensagem = uploadImagem();
		
			$this->load->model("produto_model");
			$this->produto_model->salvar($id);
			$this->session->set_flashdata('success', 'Produto alterado comsucesso!');
			redirect('compra');
	}
	
	public function listaDeDesejos(){
		$idProduto = $this->input->get("idProduto");
		
		$usuario = $this->session->userdata("usuario_logado");
		$dados = array("idProduto" => $idProduto,
					  "idUsuario" => $usuario['id']);
		$this->load->model("produto_model");
		$this->produto_model->salvaDesejo($dados);
		$this->session->set_flashdata('success', 'Adicionado com sucesso!');
		redirect('compra');

	}
	
	public function removerDesejo(){
		$idProduto = $this->input->get("idProduto");
		$this->load->model("produto_model");
		$usuario = $this->session->userdata("usuario_logado");
		$this->produto_model->removerDesejo($idProduto, $usuario);
		$this->session->set_flashdata('success', 'Removidado com sucesso!');
		redirect('compra');
	}
}
