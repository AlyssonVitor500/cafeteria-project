<?php 
	include_once 'conexao.php';

	$consultar = $conn->query("select * from coment");

	while($dados = $consultar->fetch_assoc()){

		$idUser = $dados['idUser'];
		
		
	}

	$consultar2 = $conn->query("select tb_users.nome, coment.comentario from tb_users,coment where tb_users.id = coment.idUser");

	while($dados2 = $consultar2->fetch_assoc()){

		$nome = $dados2['nome'];
		$comentario = $dados2['comentario'];

		echo "

		<h3 style='font-size: 7vh; text-align: center; float: left'>$nome<i class='fas fa-user fa-lgx' style='float: right;'></i>:</h3> <input style='width: 100%; font-size: 6vh;'  type='text' disabled value='$comentario'>
		<br><br><br>";
		
	}

	

	
 ?>