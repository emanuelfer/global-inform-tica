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
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/administracao.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">		
	</head>
	
	<body>
		<div class= "header">
			<div class="header-list">
				<h3 >
						<?php 
							if($this->session->userdata['nome'])
								echo 'Olá, '.$this->session->userdata['nome'];
						?>
				</h3>
				<ul>
					<li><a><img src="<?php echo base_url(); ?>assets/imagens/user.png" width="16" height="16"> Minha Conta</a></li>
					<li><a><img src="<?php echo base_url(); ?>assets/imagens/heart.png" width="16" height="16"> Lista de Desejos</a></li>
                    <li><a href="login/logincliente"><img src="<?php echo base_url(); ?>assets/imagens/user.png" width="16" height="16"> Login</a></li>
					<li><a  href="logincliente/logout"><img src="<?php echo base_url(); ?>assets/imagens/user.png" width="16" height="16"> Sair</a></li>
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
		
		<div class="painel-area">		
			<div class="painel">
				<h1>Área Administrativa</h1>
				<a href="cadastro"><button>Adicionar Produto</button></a>
				<a href="pesquisar"><button>Buscar Produto</button></a>
				<a href="pesquisar"><button>Alterar Produto</button></a>
				<a href="pesquisar"><button>Remover Produto</button></a>
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