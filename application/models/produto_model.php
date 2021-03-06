<?php
	class Produto_model extends CI_model{
		
		public function cadastrar($produto){
			$this->db->insert("produto", $produto);
		}
		
		public function buscaTodos(){
			return $this->db->get("produto")->result_array();
		}
		
		public function retorna($id){
		return $this->db->get_where("produto", array(
			"id" => $id))->row_array();
		}
		
		public function pesquisar($nome){
			if(isset($nome)){
				$this->db->select('*');
				$this->db->like('nome', $nome);
				return $this->db->get('produto')->result_array();
			}
		}
		
		public function deletar($id){
			$this->db->where('id', $id);
			$this->db->delete('produto');
			return true;
		}
		
		public function salvar(){
			$id = $this->input->post('id');
			
			$foto = $this->input->post('foto');
			
			if($_FILES['arquivo']['name'] !=""){
				$produto = array(
					'nome' => $this->input->post('nome'),
					'preco' => $this->input->post('preco'),
					'especificacao' => $this->input->post('especificacao'),
					'descricao' => $this->input->post('descricao'),
					'foto' => $_FILES['arquivo']['name']
				);
			}else{
				
				$produto = array(
					'nome' => $this->input->post('nome'),
					'preco' => $this->input->post('preco'),
					'especificacao' => $this->input->post('especificacao'),
					'descricao' => $this->input->post('descricao'),
					'foto' => $foto
				);
			}
				$this->db->where('id', $id);
				return $this->db->update('produto', $produto);
			
		}
		
		public function salvaDesejo($dados){
			return $this->db->insert("lista_desejo", $dados);
		}
		
		public function buscaDesejos($usuario){
			$this->db->select('idProduto');
			$this->db->where('idUsuario', $usuario['id']);
			$lista = $this->db->get('lista_desejo')->result_array();
			$produtos = array();
			foreach($lista as $idProduto){
				array_push($produtos, $this->retorna($idProduto['idProduto']));
			}
			return $produtos;
		}
		
		public function buscaDesejo($idProduto, $usuario){
				$this->db->select('*');
				$this->db->where('idProduto', $idProduto);
				$this->db->where('idUsuario', $usuario['id']);
				return $this->db->get('lista_desejo')->result_array();
			
		}
		
		public function removerDesejo($idProduto, $usuario){
			$this->db->where('idProduto', $idProduto);
			$this->db->where('idUsuario', $usuario['id']);
			$this->db->delete('lista_desejo');
			return true;
		}
		
	}
	
	
	
?>