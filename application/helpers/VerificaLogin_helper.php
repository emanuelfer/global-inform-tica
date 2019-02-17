<?php
	function verificaLogin($s){
		if(!$s->session->has_userdata('administrador'))
			redirect('welcome');
	}
?>