<?php
	session_start();
?>

<!doctype html>
<html>
<head>
	<title>10Contou - Cadastro do cliente</title>
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
					<button class="btn btn-warning" style="margin-left: 10px;"><a href="login.php" style="color: black; text-decoration: none;">ENTRAR</a></button>
				</ul>
			</div>		

			<div class="container">
				
			    <div class="navbar-header">
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

			<form  action="_back_end/cadastro_cli.php" method="post" id="cadastrocli">
				<br/>
				<label class="lblcli">Nome: </label>
				<input id="nome" type="text" name="nome">
				<br/>

				<fildset>
				<label class="lblcli" >Celular: </label>
				<input id="cel" type="tel" name="cel">
				<label class="lblcli" >Email: </label>
				<input id="email" type="email" name="email">
				<br/>

				<label class="lblcli" >UF: </label>
				<input id="uf" type="text" maxlength="2" name="uf">
				<label class="lblcli" >Município: </label>
				<input id="mun" type="text" name="mun">
				<label class="lblcli" >Bairro: </label>
				<input id="bairro" type="text" name="bairro">
				<br/>

				<label class="lblcli"  id="lblrua">Endereço: </label>
				<input id="rua" type="text" name="end">	
				<label class="lblcli" id="lblnum">Nº: </label>
				<input id="num" type="number" name="num">
				<br/>	

				<label class="lblcli" id="lblsenha">Senha: </label>
				<input id="senha" type="password" name="senha">
				<label class="lblcli" id="lblcsenha">Confirmar Senha: </label>
				<input id="confSenha" type="password" name="confSenha"/>
				<br/>
				<input id="cadastrar" class="btn btn-primary btn-lg" type="submit" value="Cadastrar" name="cadastrar">		
			</form>

			<?php
				if(isset($_SESSION['camposVazios'])){
					echo('<br/><b>Nenhum campo pode ficar vazio!</b>');
				}
				unset($_SESSION['camposVazios']);

				if(isset($_SESSION['emailInvalido'])){
					echo('<br/><b>Email já cadastrado!</b>');
				}
				unset($_SESSION['emailInvalido']);

				if(isset($_SESSION['senhaIncoincidente'])){
					echo('<br/><b>As senhas não coincidem!</b>');
				}
				unset($_SESSION['senhaIncoincidente']);

			?>

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
		</footer>
	</body>
</html>