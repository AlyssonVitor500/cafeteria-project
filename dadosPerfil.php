<?php 

	include_once 'conexao.php';

	$email = $_GET['email'];
	

	$consultar = $conn->query("select * from tb_users where email='$email'");


	while($dados = $consultar->fetch_assoc()) {

		$nome = $dados['nome'];
		$email = $dados['email'];
		$tel = $dados['tel'];
		$data = $dados['data'];
		$id = $dados['id'];
		echo "<tr style='color: white'>";
		echo "<td>$nome<td>$email<td>$tel<td>$data";
	}

	

 ?>