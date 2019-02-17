<?php
	function uploadImagem(){
		$mensagem = 'Erro ao cadastrar produto!';
		if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
			$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
			$nome = $_FILES['arquivo'][ 'name' ];

			// Pega a extensão
			$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

			// Converte a extensão para minúsculo
			$extensao = strtolower ( $extensao );

			// Somente imagens, .jpg;.jpeg;.gif;.png
			// Aqui eu enfileiro as extensões permitidas e separo por ';'
			// Isso serve apenas para eu poder pesquisar dentro desta String
			if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

				// Concatena a pasta com o nome
				$destino = 'assets/imagens/' .$nome;

				// tenta mover o arquivo para o destino
				if ( @move_uploaded_file ($arquivo_tmp, $destino) ) {
					return 'sucesso';
				}
				else
					$mensagem = 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.';
			}
			else
				$mensagem ='Você poderá enviar apenas arquivos *.jpg;*.jpeg;*.gif;*.png';
				
		}
		else{
			$mensagem = 'Você não enviou nenhum arquivo!';
		}
		return $mensagem;
	}
?>