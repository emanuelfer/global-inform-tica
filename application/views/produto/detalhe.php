<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Informática</title>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/paginacompra.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/detalhe.css">

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
					<li><a><img src="<?php echo base_url(); ?>assets/imagens/heart.png" width="16" height="16"> Lista de Desejos</a></li>
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
		<div class="detalhe-area">
			<div class="detalhe">
				<div class="topo-area">
				<div class="fotoproduto">
					<img src="<?php echo base_url(); ?>assets/imagens/<?php echo $produto['foto'] ?>">
				</div>
				
					<div class="especificacaoproduto">
						<h2><?php echo $produto['nome']?> -
							<?php echo reais($produto['preco'])?>
						</h2>
						<h5> <?php echo $produto['especificacao']?></h5><br>
						<a href="#" style="text-decoration: none"><h3>Comprar <img src="<?php echo base_url(); ?>assets/imagens/payment.png ?>" width="45" height="45"></h3></a>

					</div>
				</div>

				<div class="descricaoproduto">

					<h5>Descrição: <?php echo $produto['descricao']?></h5>
				</div>
				<div class="administrador-area">
					<?php
						if($this->session->has_userdata('administrador')):
					?>
					<a href="<?=base_url('produto/deletar/'.$produto['id']);?>" class="btn btn btn-primary">Deletar Produto</a>
					<a href="<?=base_url('editar?id='.$produto['id']);?>" class="btn btn btn-primary">Editar Produto</a>
					<?php
						endif;
					?>
				</div>
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