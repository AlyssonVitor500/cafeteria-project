<?php 
	include_once 'conexao.php';


	$id = $_GET['id'];

	
	$nome1 = isset($_POST['nomeTxt'])?$_POST['nomeTxt']:"";
	$tel1 = isset($_POST['telTxt'])?$_POST['telTxt']:"";
	$email1 = isset($_POST['emailTxt'])?$_POST['emailTxt']:"";
	$senha1 = isset($_POST['senhaTxt'])?$_POST['senhaTxt']:"";
	$data1 = isset($_POST['dataTxt'])?$_POST['dataTxt']:"";


	$sql = $conn->query("update tb_users set nome = '$nome1', tel = '$tel1', email = '$email1', senha = '$senha1', data = '$data1' where id = '$id'");
	if (mysqli_affected_rows($conn) >= 0) {
		header("location: perfilCliente.php?email=$email1");
	}
 ?>