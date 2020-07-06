<?php
	session_start();
?>

<!doctype html>
<html>
<head>
	<title>10Contou - Cadastro do fornecedor</title>
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

			<form action="_back_end/cadastro_for.php" method="post" id="cadastrofor">
				
				<br>

				<div style="margin: 10px">
					<label class="lblfor">Razão Social: </label> <input id="nome" type="text" name="razao">
					<label  class="lblfor">CNPJ: </label><input id="cnpj" type="number" name="cnpj"><br/><br/>
					<label  class="lblfor">I.E: </label><input id="ie" type="number" name="ie">
					<label class="lblfor">Segmento: </label>
					<select id="ramo" name="segmento">
						<option value="1">Alimentício</option>
						<option value="2">Beleza</option>
						<option value="3">Pet</option>
						<option value="4">Saúde</option>
						<option value="5">Reparos</option>
						<option value="6">Vestuário</option>
					</select>					
				</div>

				<br>
				
				<div style="margin: 10px">	
					<label class="lblfor">Endereço: </label><input id="rua" type="text" name="end">	
					<label class="lblfor" type="number">Nº: </label><input id="num" type="text" name="num">
					<label class="lblfor">Bairro: </label><input id="bairro" type="text" name="bairro"><br/><br/>
					<label class="lblfor">UF: </label><input id="uf" type="text" maxlength="2" name="uf">
					<label class="lblfor">Município: </label><input id="mun" type="text" name="mun">
				</div>

					<br>
				
				<div style="margin: 10px">
					<label class="lblfor">Telefone: </label><input id="tel" type="tel" name="tel">	
					<label class="lblfor">WhatsApp: </label><input id="cel" type="tel" name="wpp"><br/><br/>
					<label class="lblfor">E-mail: </label><input id="email" type="email" name="email">	
					<label class="lblfor">Site: </label><input id="site" type="text" name="site">		
					<br>			
				</div>	

				<div style="margin: 20px 10px 10px 10px;">

					<label class="lblfor" id="lblsenha">Senha: </label><input id="senha" type="password" name="senha">
					<label class="lblfor" id="lblcsenha">Confirmar Senha: </label><input id="confSenha" type="password" name="confSenha">	

					<input id="cadastrar" class="btn btn-primary btn-lg" type="submit" value="Cadastrar" name="cadastrar" onclick="confirmar()"></input>
				</div>			
			</form>

			<?php

				if(isset($_SESSION['camposVazios'])){
					echo('<br/><b>Preencha todos os campos!</b>');
				}

				if(isset($_SESSION['emailInvalido'])){
					echo('<br/><b>O email digitado já foi cadastrado!</b>');
				}

				if(isset($_SESSION['senhaInvalida'])){
					echo('<br/><b>As senhas não coincidem!</b>');
				}
				unset($_SESSION['camposVazios']);
				unset($_SESSION['emailInvalido']);
				unset($_SESSION['senhaInvalida']);
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
		    <script>

				  $(function(){
			        $('#foto').change(function(){
			            const file = $(this)[0].files[0]
			            const fileReader = new FileReader()
			            fileReader.onloadend = function(){
			                $('#img').attr('src', fileReader.result)
			            }
			            fileReader.readAsDataURL(file)

			            $('#txtlogo').hide();
			        })
			      })	

		    </script>
		</footer>
	</body>
</html>