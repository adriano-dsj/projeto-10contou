<!doctype html>
<html>
<head>
	<title>10Contou - Acesse ou cadastre-se</title>
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

			<h2>Entre com sua conta de consumidor ou fornecedor</h2>
			<form  action="_back_end/login.php" method="post" id="logins" style="margin-top: 10px; margin-bottom: 55px;"><br/>
				<label class="lblcli" >Email:</label>
				<input id="email" type="email" name="email"><br/>
				<label class="lblcli" id="lblsenha">Senha: </label>
				<input style="margin-left: 5px;" id="senha" type="password" name="senha"><br/>
				<input id="login" class="btn btn-primary btn-sm" type="submit" value="login" name="login">
			</form>

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
		    </script>
		</footer>
	</body>
</html>