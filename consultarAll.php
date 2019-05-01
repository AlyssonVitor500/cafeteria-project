<?php 
	include_once 'conexao.php';

	$consultar = $conn->query("select * from tb_users");


	while($dados = $consultar->fetch_assoc()){

		$id = $dados['id'];
		$nome = $dados['nome'];
		$email = $dados['email'];
		$tel = $dados['tel'];
		$senha = $dados['senha'];
		$data = $dados['data'];

		echo "<tr>"; /* Início da Tabela */
		echo "<td>$id<td>$nome<td>$email<td>$tel<td>$senha<td>$data";
		echo "<td><a href='alter.php?id=$id'  class='btn  btn-warning'>Alterar</a>";
		echo "<td><a href='delete.php?id=$id' class='btn  btn-danger'>Deletar</a>";
		
		


	}

	

 ?>
