<?php 

	include_once 'conexao.php';

	$id = $_GET['id'];
	

	$consultar = $conn->query("select * from tb_users where id='$id'");


	while($dados = $consultar->fetch_assoc()) {

		$nome = $dados['nome'];
		$email = $dados['email'];
		$tel = $dados['tel'];
		$data = $dados['data'];
		$id = $dados['id'];
		
	}

	

 ?>