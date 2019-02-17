<?php
	class Administrador_model extends CI_model{
		
		public function logarAdministrador($email, $senha){
			$this->db->where("email", $email);
			$this->db->where("senha", $senha);
			$administrador = $this->db->get("administrador")->row_array();
			return $administrador;
		}
	}
?>