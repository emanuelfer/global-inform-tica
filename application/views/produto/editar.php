<?php
	verificaLogin($this);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Informática</title>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cadastro.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validator.min.js"></script>

		
	</head>
	
	<body>
		
		<div class= "header">
			<div class="header-list">
				<h3 >
						<?php 
							if($this->session->has_userdata('nome'))
								echo 'Olá, '.$this->session->userdata['nome'];
						?>
				</h3>
				<ul>
					<li><a><img src="<?php echo base_url(); ?>assets/imagens/user.png" width="16" height="16"> Minha Conta</a></li>
					<li><a href="listadesejo"><img src="<?php echo base_url(); ?>assets/imagens/heart.png" width="16" height="16"> Lista de Desejos</a></li>
                    <li><a href="logincliente"><img src="<?php echo base_url(); ?>assets/imagens/user.png" width="16" height="16"> Login</a></li>
					<li><a href="logincliente/logout"><img src="<?php echo base_url(); ?>assets/imagens/user.png" width="16" height="16"> Sair</a></li>
                </ul>
			</div>
		</div>
		
		<div class="header-logo">
			<div class="logo">
				<img src="<?php echo base_url(); ?>assets/imagens/logo.png">
			</div>
		</div>
		
		<div class="menuprincipal">
			<div class="menulist">
				<ul>
					<a href="<?php echo base_url(); ?>welcome"><li>HOME</li></a>
					<a href="<?php echo base_url(); ?>compra"><li>PÁGINA DE COMPRA</li></a>
					<a href="pesquisar"><li>PESQUISAR PRODUTO</li></a>
					<a href="sobrenos"><li>SOBRE NÓS</li></a>
					<a style="color: white"><li style="background-color: #5a88ca;">ADMINISTRAÇÃO</li></a>
				</ul>
			</div>
		</div>
		
		<div class="cadastro-area">
			<div class="cadastro">
				<h1>Editar Produto</h1>
				<form method="POST" action="produto/salvar?=<?=$produto['id']?>" data-toggle="validator" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $produto['id']?>">
					
					<label>Nome</label>
					<input type="text" name="nome" placeholder="Nome do produto" class="col-7 form-control" value="<?= $produto['nome']?>" required><br>
					
					<label>Preço</label>
					<input type="number" step="0.01" name="preco" placeholder="Digite o preço do produto" class="col-7 form-control" value="<?= $produto['preco']?>" required><br>
					
					<label>Especificação</label>
					<input type="text"  name="especificacao" placeholder="Digite a especificação do produto" class="col-7 form-control" value="<?= $produto['especificacao']?>" required><br>
					
					<label>Descrição</label>
					<textarea type="text-area" name="descricao" placeholder="Descrição do produto" class="col-7 form-control" required><?=$produto['descricao']?></textarea><br>
					
					<h5>Selecione uma imagem:</h5> 
					<input name="arquivo" type="file" /><br>
   					<br />
					
					<INPUT TYPE="hidden" NAME="foto" VALUE="<?=$produto['foto']?>"/>
					
					<input type="submit" value="Salvar" class="btn btn-success"><br><br>
					
				</form>
			</div>
		</div>
		
		
		<footer>
			<div class="rodape">
				<ul>
					<a href="#">
						<li>
							Contato
						</li>
					</a>
					<a href="#">
						<li>
							Sobre Nós
						</li>
					</a>
					<a href="#">
						<li>
							FAQ
						</li>
					</a>
				</ul>
			</div>
			
		</footer>
		
	</body>
</html>