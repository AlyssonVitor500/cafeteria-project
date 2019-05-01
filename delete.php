<?php 
	include_once 'conexao.php';
	$id=$_GET['id'];
	$consultar = $conn->query("delete from tb_users where id = $id");


	if(mysqli_affected_rows($conn)>0) {
		header("location: listaDeCadastrados.php");
	}
 ?>