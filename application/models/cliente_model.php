<?php
	class Cliente_model extends CI_model{
		
		public function logarCliente($email, $senha){
			$this->db->where("email", $email);
			$this->db->where("senha", $senha);
			$cliente = $this->db->get("cliente")->row_array();
			return $cliente;
		}
	}
?>