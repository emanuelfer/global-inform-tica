<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Informática</title>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/paginacompra.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sobrenos.css">

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
					<a href="pesquisar"><li >PESQUISAR PRODUTO</li></a>
					<a href="sobrenos"><li style="background-color: #5a88ca; color: white">SOBRE NÓS</li></a>
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
		<div class="sobrenos-area">
			<div class="sobrenos">
				<h1>Sobre Nós</h1>
				<p>Nam tempor leo facilisis metus eleifend, eu vestibulum magna feugiat. Nullam fermentum ac ante a facilisis. Nam sit amet efficitur orci, et efficitur sem. Ut cursus, augue non pellentesque tempor, felis turpis eleifend dolor, id ullamcorper justo quam eget leo. Sed mollis elementum tincidunt. Aliquam ipsum nunc, mollis egestas elit sit amet, faucibus molestie enim. Fusce ullamcorper rutrum eros, et feugiat eros finibus sodales. Quisque nec nibh consectetur, placerat augue cursus, aliquet neque.</p>
				
				<img src="<?php echo base_url(); ?>assets/imagens/empresarios.jpg">
				<p>In imperdiet euismod quam id rhoncus. Etiam a blandit tellus. Praesent nec aliquam lacus. Maecenas ac elementum lectus. Nunc eleifend lectus purus, vel porta quam pharetra porttitor. Phasellus fermentum augue et libero viverra faucibus. Donec vitae lacinia tellus, id consectetur orci. Sed consequat sed nisi eget iaculis. Nam tristique, sapien at iaculis vestibulum, leo odio varius est, a viverra enim ipsum ac odio. Phasellus mattis eu orci ut commodo. Vivamus lacinia interdum porta. Suspendisse nec pharetra leo. Praesent luctus magna id aliquet consequat.</p>

				<p>Vestibulum lacus felis, tristique non pretium ac, facilisis et massa. Vestibulum pulvinar libero vitae ante venenatis porttitor. Duis vestibulum tincidunt arcu, quis scelerisque nisi tristique et. Sed interdum ultricies risus. Integer non velit mi. Donec et magna ut felis varius commodo. Ut id dolor metus. Nam congue justo sed nulla bibendum dapibus.</p>

				<p>Vivamus accumsan odio ac venenatis euismod. Nunc sed diam ante. In hac habitasse platea dictumst. Sed convallis lacinia vehicula. Nam efficitur orci vitae volutpat volutpat. Donec orci lacus, commodo quis urna vitae, aliquet bibendum lectus. Phasellus quis aliquet mi. In libero mi, pretium ac sem vel, imperdiet elementum dolor. Proin et velit sed metus volutpat tincidunt. Proin eu suscipit turpis, sit amet varius dolor. Nulla fermentum, metus ut euismod euismod, turpis ante luctus mauris, a finibus purus enim at mi. Nulla nec suscipit tortor, eu porta augue. Sed sit amet porta diam.</p>

				<p>Etiam pellentesque sem at lorem suscipit malesuada. Maecenas dictum augue id pretium varius. Suspendisse potenti. Suspendisse condimentum erat in nibh rutrum posuere. Quisque lorem mauris, scelerisque ac ex hendrerit, tincidunt interdum justo. Curabitur condimentum tortor eu massa pretium condimentum. Cras cursus dui enim, vel euismod orci sodales euismod. Vivamus neque augue, suscipit ut rhoncus at, vehicula ac ex. Sed euismod et felis quis pretium. Vivamus eu libero risus. Pellentesque enim neque, imperdiet ut urna fermentum, tincidunt ornare sapien. Mauris vitae est ut velit maximus vestibulum.</p>
			</div>
		</div>
		

		<footer>
			<div class="rodape">
				<ul>
					<a src="#">
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