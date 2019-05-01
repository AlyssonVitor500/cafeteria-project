<?php 

	include_once 'conexao.php';

	$nome1 = isset($_POST['nomeTxt'])?$_POST['nomeTxt']:"";
	$tel1 = isset($_POST['telTxt'])?$_POST['telTxt']:"";
	$email1 = isset($_POST['emailTxt'])?$_POST['emailTxt']:"";
	$senha1 = isset($_POST['senhaTxt'])?$_POST['senhaTxt']:"";
	$data1 = isset($_POST['dataTxt'])?$_POST['dataTxt']:"";


	$sql = "INSERT INTO tb_users(nome, tel, email, senha, data) VALUES ('$nome1', '$tel1', '$email1', '$senha1', '$data1')";

	if($conn->query($sql) == TRUE) {
		header("location: home.php");
	}else {
		header("location: cadastrarCliente.php?bo=1");
	}
	$conn->close();

 ?>