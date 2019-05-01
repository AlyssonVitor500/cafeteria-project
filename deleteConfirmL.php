<?php 
	session_start();
	
	
	include_once 'conseguirDados.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cafeteria - Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/css" href="img/iconCima.png">

	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<script type="text/javascript">
		function alternaImgIcon() {
			document.getElementById('icone').src = "img/iconSelect.png";
		}
		function voltaImgIcon() {
			document.getElementById('icone').src = "img/icon.png";
		}


	</script>
<style type="text/css">
	::-webkit-scrollbar-thumb {
					height: auto;
					background-color: rgba(139,69,19,1)  ;
					}	
				::-webkit-scrollbar{
					
					width:3px;
					
					}	
				
				::-webkit-scrollbar-button {
					background-color: rgba(255,255,255,1);
					height: 1px;
					
					
					
					}
					
				::-webkit-scrollbar-track-piece {
					background-color: white;
					
					}
					
				
				
				
					
					

	body{
		overflow-x: hidden;

	}
</style>
<style type="text/css">
	@font-face {
		font-family: Lovelique;
		src: url('fonts/The Perfect Christmas.ttf');
	}
	@font-face {
		font-family: Champagne;
		src: url('fonts/Champagne & Limousines.ttf');
	}
	textarea#textAr {
		transition: .5s;
		
	}
	textarea#textAr:focus {
		background-color: rgba(0,0,0,.7);
		border: solid 2px #ff8c00;
		color: white;
		font-size: 7vh;
	}

	.menu-fixo {
		position: fixed;
		top: 0;
		z-index: 99;
		transition: all .5s;
		background-color: white;
		width:100%;
		border-bottom: 1px solid orange;
	}
	#perfil {
		color: grey;
		text-decoration: none;
		transition: .2s;
	}
	#perfil:hover {
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		color: rgb(0,0,0,.8);
	}
</style>	
<body>
	<nav id="menuHeader" class="navbar navbar-expand-lg navbar-light bg-brown">
			   <img src="img/icon.png" onmouseover="alternaImgIcon()" onmouseout="voltaImgIcon()" class="" id="icone" width="50vh">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			   			 <div class="navbar-nav">
						      <a class="nav-item nav-link active" href="homeL.php?email=<?php echo $email; ?>">Home <span class="sr-only">(current)</span></a>
						      <a class="nav-item nav-link" href="prodL.php?email=<?php echo $email; ?>">Produtos</a>
						      <a class="nav-item nav-link" href="sobrenosL.php?email=<?php echo $email; ?>">Sobre nós</a>

						     
			    		</div>
			 </div>
			  <a class=" btn-default btn-lg" id="perfil" href="perfilCliente.php?email=<?php echo $email; ?>"><i class="fas fa-user fa-lg"></i>Perfil</a>
		</nav>


			<div class="container-fluid" style="background-image: url(img/coffe3.jpg); background-attachment: fixed; background-position: 50% 50%; padding-top: 5%; padding-bottom: 15%;">
				<h1 style="color: white;font-family: Lovelique; font-size: 12vh; text-align: center;">Tem Certeza de que deseja efetuar essa operação?</h1>
				<div class="container">
					<div class="row">
						<div class="col-md-6"> <a href="deleteL.php?id=<?php echo $id;?>" class="btn btn-success btn-lg" style="width:100%;">Sim</a></div>
						<div class="col-md-6"> <a href="perfilCliente.php?email=<?php echo $email;?>" style="width:100%;" class="btn btn-danger btn-lg">Não</a></div>
					</div>
				</div>
				
			</div>

			

		<footer class="footer" style="background-color: white; font-family: Champagne; border-top: 1px solid orange; padding-top: 2%;">
				<div style="font-family: Champagne;" class="container">
					<div class="row">
						<div class="col-md-12 center"><h1 style="text-align: center; font-size: 15vh">Redes Sociais</h1></div>
					</div>

					<div class="row">
						<div style="font-family: Champagne;"  class="col-md-4 center"><i class="fab fa-facebook fa-2x" style="color: blue;"></i> /cafeteriaBomSabor</div>
						<div class="col-md-4 center"><i class="fab fa-twitter-square fa-2x" style="color: blue"></i>/@bomSaborCoffee</div>
						<div class="col-md-4 center"><i class="fab fa-instagram fa-2x"></i>/@bomSaborCoffee</div>

						

					</div>
					
				<h3 style="text-align: center; font-size: 15pt; font-weight: bold;">Todos os direitos reservados à Cafeteria Bom Sabor&copy;</h3>
		</footer>
			
		
			



	<script type="text/javascript" src="js/bootstrap4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>

	<script type="text/javascript">
		function alternaImgIcon() {
			document.getElementById('icone').src = "img/iconSelect.png";
		}
		function voltaImgIcon() {
			document.getElementById('icone').src = "img/icon.png";
		}
	</script>
<script type="text/javascript">	
	$(function(){   
		var nav = $('#menuHeader');   
		$(window).scroll(function () { 
			if ($(this).scrollTop() > 150) { 
				nav.addClass("menu-fixo");

			
			} else { 
				nav.removeClass("menu-fixo"); 
				

			} 
		});  
	});
</script>

</body>
</html>