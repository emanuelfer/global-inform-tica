<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Informática</title>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		
		<script src="<?php echo base_url(); ?>assets/jquery/jquery-3.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/jquery/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slider.js"></script>
		
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
					<a href="<?php echo base_url(); ?>welcome"><li style="background-color: #5a88ca; color: white">HOME</li></a>
					<a href="<?php echo base_url(); ?>compra"><li>PÁGINA DE COMPRA</li></a>
					<a href="pesquisar"><li>PESQUISAR PRODUTO</li></a>
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
		
		<div class="slider-area">

			<div class="slider">
				<ul>
					<a href="#">
						<li>
							<div class="imagem">
									<img src="<?php echo base_url(); ?>assets/imagens/pc1.jpg" width="496" height="410" style="float: left; margin-right: 100px;">
							</div>

							<div class="desc">
								<h2>Macbook Air <br/>Oitava Geração</h2>
								<img src="<?php echo base_url(); ?>assets/imagens/payment.png">
							</div>
						</li>
					</a>
					<a href="#">
						<li>
							<div class="imagem">
									<img src="<?php echo base_url(); ?>assets/imagens/pc2.jpg" width="469" height="348" style="float: left; margin-right: 100px;">
							</div>

							<div class="desc">
								<h2>Computador Dell <br/>X1129 Xenon</h2>
								<img src="<?php echo base_url(); ?>assets/imagens/payment.png">
							</div>
						</li>
					</a>
					<a href="#">
						<li>
							<div class="imagem">
									<img src="<?php echo base_url(); ?>assets/imagens/cel1.jpg" width="300" height="368" style="float: left; margin-right: 170px; margin-left: 100px;">
							</div>

							<div class="desc">
								<h2>Iphone X <br/>64GB</h2>
								<img src="<?php echo base_url(); ?>assets/imagens/payment.png">
							</div>
						</li>
					</a>
				</ul>
			</div>
		</div>
		
		<div class="lancamentos-area">
			<div class="lancamentos">
				<h1>Lançamentos</h1><br>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/product-1.jpg"><br>
						Samsung Galaxy S
					</div>
				</a>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/product-2.jpg"><br>
						Nokia Lumia 920
					</div>
				</a>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/product-3.jpg"><br>
						LG Prime Y
					</div>
				</a>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/product-4.jpg"><br>
						Sony Experience Z
					</div>
				</a>
			</div>
		</div>
		
		<div class="marcas-area">
			<div class="marcas">
				<h1>Marcas</h1>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/brand1.png">
					</div>
				</a>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/brand2.png">
					</div>
				</a>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/brand3.png">
					</div>
				</a>
				<a href="#">
					<div class="itens">
						<img src="<?php echo base_url(); ?>assets/imagens/brand4.png">
					</div>
				</a>
			</div>
		</div>
		
		<div class="produtos-area">
			<div class="produtos">			
				<div class="itens">
					<h2>Mais Vendidos</h2>
					<div class="produto">
						<img src="<?php echo base_url(); ?>assets/imagens/product-thumb-1.jpg" style="width: 50%; height: 80%;">
						Iphone 6S 128GB
					</div>
					<div class="produto">
						<img src="<?php echo base_url(); ?>assets/imagens/product-thumb-2.jpg"  style="width: 50%; height: 80%;">
						Samsung Galaxy S7
					</div>
				</div>
			
				<div class="itens">
					<h2>Mais Procurados</h2>
					<div class="produto">
						<img src="<?php echo base_url(); ?>assets/imagens/product-thumb-3.jpg" style="margin-right: 30px;">
						Iphone 6S 128GB
					</div>
					<div class="produto">
						<img src="<?php echo base_url(); ?>assets/imagens/product-thumb-4.jpg" style="margin-right: 30px;">
						Samsung Galaxy S7
					</div>
				</div>
			
				<div class="itens">
					<h2>Promocões</h2>
					<div class="produto">
						<img src="<?php echo base_url(); ?>assets/imagens/product-thumb-1.jpg" style="width: 50%; height: 80%;">
						Iphone 6S 128GB
					</div>
					<div class="produto">
						<img src="<?php echo base_url(); ?>assets/imagens/product-thumb-2.jpg"  style="width: 50%; height: 80%;">
						Samsung Galaxy S7
					</div>
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