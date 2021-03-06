<?php
	session_start();
?>

<!doctype html>
<html>
<head>
	<title>10Contou - Página inicial</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<header>
	<nav class="navbar">

	    <div style="padding-right: 40px;">

			<?php
			if(!isset($_SESSION['clienteLogado']) and !isset($_SESSION['fornecedorLogado'])){
			echo('<ul class="nav navbar-nav navbar-right">
				<a style="color: #FFF96B ;" href="cadastro.php">Cadastre-se</a>
				<button class="btn btn-warning" style="margin-left: 10px;"><a href="login.php" style="color: black; text-decoration: none;">ENTRAR</a></button>
			</ul> ');
			} else {
				echo('
				<ul class="nav navbar-nav navbar-right"><button class="btn btn-warning" style="margin-left: 10px;">
					<a href="_back_end/logout.php" style="color: black; text-decoration: none;">SAIR</a>
				</button></ul>
				');
			}
			?>
			
		</div>		

		<div class="container">
			
		    <div class="navbar-header">
		    	
		    	<!-- LOGO -->
		    	<a href="index.php" alt="10contou - home" title="Home"><img id="logo" src="img/10contou.png" ></a>
		    </div>

			<div class="collapse navbar-collapse" id="menu_lista">
				<ul class="nav navbar-nav navbar-right">
					<li class="link_menu"><a href="index.php">HOME</a></li>
					<li class="link_menu"><a href="#sobre.php">SOBRE</a></li>
					<li class="link_menu"><a href="#parceiros.php">PARCEIROS</a></li>
					<li class="link_menu"><a href="#contato.php">CONTATO</a></li>
				</ul>
			</div>

		</div>
	</nav>
</header>

<!-- Fim do menu de navegação -->

<div id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-xs-12">
				<div id="meu_carrossel" class="carousel slide" data-ride="carousel">

					<!-- PONTOS REPRESENTATIVOS DE IMAGENS -->
					<ol class="carousel-indicators">
    					<li data-target="#meu_carrossel" data-slide-to="0" class="active"></li>
    					<li data-target="#meu_carrossel" data-slide-to="1"></li>
    					<li data-target="#meu_carrossel" data-slide-to="2"></li>
  					</ol>

					<!-- IMAGENS -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/arroz.jpg" class="img-thumbnail center" alt="...">
							<div class="carousel-caption">
								Pacotes de arroz em promoção.
							</div>
						</div>
					
						<div class="item">
							<img src="img/beleza.jpg" class="img-thumbnail"  alt="...">
							<div class="carousel-caption">
								Produtos de beleza pela metade do preço.
							</div>
						</div>

						<div class="item">
							<img src="img/limpeza.jpg" class="img-thumbnail"  alt="..." style="width:500px; height: 300px;">
							<div class="carousel-caption">
								Principais produtos de limpeza para a sua casa.
							</div>
						</div>

					</div>

					<!-- CONTROLES  de esquerda e direita do carousel-->
					<a class="left carousel-control" href="#meu_carrossel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="right carousel-control" href="#meu_carrossel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>

			<div class="col-md-7 col-xs-12">

				<!-- Texto de inicio do site -->

				<h1>Hello, world!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate. Maecenas nisi massa, imperdiet at viverra sed, gravida id quam. Vestibulum diam est, efficitur in libero ut, maximus dictum tellus. In a leo dolor. Nam nec dictum magna. Donec interdum dolor vel nulla placerat, at tincidunt orci viverra. Curabitur vel lacus enim. Morbi iaculis ipsum et mi pretium ultricies. Duis ut metus quis sapien dictum euismod. Vestibulum leo odio, porttitor eget ultricies eu, dignissim id tortor.
				</p>

				<p><a class="btn btn-primary btn-lg" href="#" role="button">Veja mais promoções</a></p>
			</div>
		</div>
	</div>
</div>


<!-- Parte do meio do site onde ficam as 3 imagens com descrição -->
<div id="middle">
	<div class="container" style="background-color: #FFF96B;">

		<div class="row"> 
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail"> 
					<img src="img/arroz.jpg" class="img-thumbnail"> 

					<div class="caption"> 
						<h3>Promoção1</h3> 
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate.</p> 
						<p><a href="#" class="btn btn-primary" role="button">Abrir</a> 
					</div> 
				</div> 
			</div> 

			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail"> 
					<img src="img/beleza.jpg" class="img-thumbnail"> 
					<div class="caption"> 
						<h3>Promoção2</h3> 
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate.</p> <p><a href="#" class="btn btn-primary" role="button">Abrir</a>
					</div> 
				</div> 
			</div> 
			
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail"> 
					<img src="img/limpeza.jpg" class="img-thumbnail" style="width:400px; height: 230px;"> 
					<div class="caption"> 
						<h3>Promoção3</h3> 
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate.</p> <p><a href="#" class="btn btn-primary" role="button">Abrir</a>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>

	<footer>

		<!-- Essa parte foi onde ficou mais confuso porque fiz o alinhamento por linha e colunas,e fui editando forçando a ficar do jeito que eu queria, então vai ter varios CSS inline aí -->
		<div class="container" >

			<div class="row">

				<div class="col-md-3">
					<!-- Como o logo do Rodapé é menor, eu reduzi ele "na marra", por isso o "width", depois tem que ver as medidas que vão querer deixar ele, e se vai manter esse logo mesmo. -->	
					<img src="img/10contou.png" style="width: 40%">
				</div>

				<div class="col-md-7" >
					<div class="col-md-1 lista_footer"><a href="index.php">HOME</a></div>
					<div class="col-md-1 lista_footer"><a href="#sobre.php">SOBRE</a></div>
					<div class="col-md-1 lista_footer"><a href="#parceiros.php">PARCEIROS</a></div>
					<div class="col-md-1 lista_footer"><a href="#contato.php" style="margin-left: 30px">CONTATO</a></div>
				</div>

				<div class="col-md-2" style="color: #FFF96B ;">
					<div class="row" style="margin-top: 20px">
						<p>Empresa: <span id="empresa"></span></p>
					</div>
					<div class="row">
						<p>Telefone: <span id="whats"></span> </p>
					</div>
					<div class="row">
						<p>E-mail: <span id="email"> </span> </p>
					</div>			
				</div>	
			</div>

			<div class="row">
				<div class="col-md-2">
					<!-- coluna vazia para poder centralizar o copyright  -->
				</div>

				<div class="col-md-8" >

					<div class="row">
					<!-- linha vazia para poder deixar o copyright na linha debaixo  -->
					</div>	

					<div class="row" style="margin-left: 130px; margin-top: 10px">
						<p style="color:#FFF96B ;">Copyright © 2020. Todos os direitos reservados.</p>
					</div>

				</div>

				<div class="col-md-2">	
				   <!-- coluna vazia para poder centralizar o copyright  -->		
				</div>

			</div>

		</div>
    <script src=js/jquery-3.5.0.js></script>
    <script src="js/bootstrap.min.js"></script>
	</footer>
  </body>
</html>