<!doctype html>
<html>
<head>
	<title>10Contou - Cadastro de ofertas</title>
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
					<button class="btn btn-warning" style="margin-left: 10px;"><a href="#" style="color: black; text-decoration: none;">PERFIL</a></button>
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

			<form action="#" method="get" id="cadastrofor">
					<br>

			<div class="container" style="margin-left: 20px;">
						
					<div style="margin: 10px; margin-left: 330px;">
						<img id="img" style="width: 300px;">
						<br>
						<label id="txtlogo">Insira a imagem da oferta</label><input id="foto" type="file" name="foto">
					</div>
					
					<br>
				
				<div style="margin: 10px">	
					<label  class="lblfor">Título da oferta: </label><input id="oferta" type="text" name="oferta">	
					<label  class="lblfor"  style="margin-left: 250px; ">Data/Hora de inicio: </label><input id="dataini" type="text" name="dataini">
				</div>
				
				<div style="margin: 10px">

					<div class="row">
						<div class="col-md-3">
							<label  class="lblfor">Descrição: </label>
						</div>
						<div class="col-md-9">
							<label class="lblfor" style="margin-left: 243px;">Data/Hora de Término:</label> <input id="datafim" type="text" name="datafim">	
						</div>
					</div>

					<div class="row">
						<div class="col-md-4" style="margin-left: 20px;">
							<textarea id="txtarea" style="resize: vertical;" name="txtarea" value="texto" rows="5" cols="38"></textarea>	
						</div>
						<div class="col-md-6" style="margin-top: 50px;">
							<input id="cadastrar" class="btn btn-primary btn-lg" type="submit" value="Ofertar" name="ofertar" onclick="confirmar()"></input>
						</div>
						<div class="col-md-3">
							
						</div>
					</div>
					
				</div>

			</div>				
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

			      function confirmar(){
			      	alert("Oferta cadastrada com sucesso");			      		
			      }	    	

		    </script>
		</footer>
	</body>
</html>