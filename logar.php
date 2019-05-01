<?php 
	session_start();
	include_once 'conexao.php';

	if(empty($_POST['email'] || empty($_POST['senha']))) {
		header("location: home.php");
		exit();
	}


	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);

	$comand ="select * from tb_users where email = '{$email}' and senha = '{$senha}'";

	$result = mysqli_query($conn, $comand);

	$rows = mysqli_num_rows($result);



	if($rows == 1) {
		$_SESSION['email'] = $email;
	
		header("location: homeL.php?email=$email");
	}else {
		header("location: logarCliente.php?num=1");
	}
 ?>