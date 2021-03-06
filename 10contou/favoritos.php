<!doctype html>
<html>
<head>
	<title>10Contou - Favoritos</title>
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
				<ul class="nav navbar-nav navbar-right">
					<a style="color: #FFF96B ;" href="cadastro.php">Cadastre-se</a>
					<button class="btn btn-warning" style="margin-left: 10px;"><a href="login.php" style="color: black; text-decoration: none;">ENTRAR</a></button>
				</ul>
			</div>		

			<div class="container">
				
			    <div class="navbar-header">
			    	<!-- LOGO -->
			    	<a href="index.php" alt="10contou - home" title="Home"><img id="logo" src="img/10contou.png" ></a>
			    	
					
			    </div>

				<div class="collapse navbar-collapse" id="menu_lista">
					<ul class="nav navbar-nav navbar-right">
						<li class="link_menu"><a href="index.php">HOME</a></li>
						<li class="link_menu"><a href="#sobre">SOBRE</a></li>
						<li class="link_menu"><a href="#parceiros">PARCEIROS</a></li>
						<li class="link_menu"><a href="#contato">CONTATO</a></li>
					</ul>
				</div>

			</div>
		</nav>
	</header>

	<div id="principal" style="background-color: #FFF96B;">
		<div class="container" style="background: #FFF96B;">

<div id="middle">
	<div class="container" style="background-color: #FFF96B;">

		<div class="row" style="text-align: center; margin: 20px 0 20px 0;">
				<p style="color: #0B0B61; font-size: 30px;">FAVORITOS</p>
		</div>

		
		<div class="row"> 
			<div class="col-sm-6 col-md-4"> 

				<div class="thumbnail">
					
					<div style="background-color: #fff">
						<div class="row">
							<div class="col-md-5">
								<img src="icones/estrela.png" >
							</div>
							<div class="col-md-4" style="margin-left: 10px;">
								<img src="icones/fogo.png" >
							</div>
							<div class="col-md-1" style="margin-left: 20px; ">
								<img src="icones/info.png" >
							</div>																						
						</div>
					</div> 
						
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

					<div style="background-color: #fff">
						<img src="icones/estrela.png" >
						<img src="icones/fogo.png" style="margin-left: 130px;" >
						<img src="icones/info.png" style="margin-left: 120px;" >					
					</div> 

					<img src="img/beleza.jpg" class="img-thumbnail"> 
					<div class="caption"> 
						<h3>Promoção2</h3> 
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate.</p> <p><a href="#" class="btn btn-primary" role="button">Abrir</a>
					</div> 
				</div> 
			</div> 
			
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail"> 

					<div style="background-color: #fff">
						<img src="icones/estrela.png" >
						<img src="icones/fogo.png" style="margin-left: 130px;" >
						<img src="icones/info.png" style="margin-left: 120px;" >					
					</div> 
										
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

		</div>
	</div>	

		<footer>

			<div class="container" >

				<div class="row">

					<div class="col-md-3">	
						<img src="img/10contou.png" style="width: 40%">
					</div>

					<div class="col-md-7" >
						<div class="col-md-1 lista_footer"><a href="index.php">HOME</a></div>
						<div class="col-md-1 lista_footer"><a href="#">SOBRE</a></div>
						<div class="col-md-1 lista_footer"><a href="#">PARCEIROS</a></div>
						<div class="col-md-1 lista_footer"><a href="#" style="margin-left: 30px">CONTATO</a></div>
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
						
					</div>

					<div class="col-md-8" >
						<div class="row">

						</div>	

						<div class="row" style="margin-left: 130px; margin-top: 10px">
							<p style="color:#FFF96B ;">Copyright © 2020. Todos os direitos reservados.</p>
						</div>

					</div>

					<div class="col-md-2">						
					</div>

				</div>

			</div>

		    <script src="js/jquery.min.js"></script>
		    <script type="text/javascript">
			      function confirmar(){
			      	alert("login realizado com sucesso");
			      }	  		    	
		    </script>
		</footer>
	</body>
</html>
