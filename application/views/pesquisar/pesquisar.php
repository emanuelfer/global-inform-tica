<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Informática</title>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pesquisar.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		
	</head>
	
	<body>
		<?php if($this->session->flashdata("success")): ?>
		<div class="alert alert-success">
		  <strong>Successo!</strong> Produto exlcuído com sucesso.
		</div>
		<?php endif ?>
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
					<a href="<?php echo base_url(); ?>compra"><li >PÁGINA DE COMPRA</li></a>
					<a href="pesquisar"><li style="background-color: #5a88ca; color: white">PESQUISAR PRODUTO</li></a>
					<a href="sobrenos"><li>SOBRE NÓS</li></a>
					<?php
							if($this->session->has_userdata('administrador')):
						?>
					<a href="administracao" ><li >ADMINISTRAÇÃO</li></a>
						<?php
							endif;
						?>
				</ul>
			</div>
		</div>
		
		<div class="busca-area">
			<div class="busca">
				<form action="pesquisar" method="post">
					<div class="form-group input-group" >
						<input name="nome" id="txt_consulta" placeholder="Consultar" type="text" class="form-control col-7" required>
						<button type="submit" class="button is-block is-link is-large is-fullwidth"><img src="<?php echo base_url(); ?>assets/imagens/busca.png"></button>
					</div>
				</form>
				
				<?php if(isset($produtos))
					foreach ($produtos as $produto) :?>
					<a href="detalhe?id=<?=$produto['id']?>"><div class="item">
						<img src="<?php echo base_url(); ?>assets/imagens/<?php echo $produto['foto'] ?>" width="90" height="127">
						<h6><?= $produto['nome']?></h6>
						<h6><?= reais($produto['preco']);?></h6>
				</div></a>
				<?php endforeach ?>
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