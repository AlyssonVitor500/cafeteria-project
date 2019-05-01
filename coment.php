<?php 
 include_once 'conexao.php';
 include_once 'conseguirDados.php';
 
 $coment = isset($_POST['text'])?$_POST['text']:"";

 	$sql = "insert into coment(idUser, comentario) values ('$id', '$coment')";

 	if($conn->query($sql) == TRUE) {
 		header("location:sobreNosL.php?email=$email");
 		
 	}else {
 		header("location:sobreNosL.php?email=$email");
 		echo "ERROR: " . $sql . "<br>" . mysqli_error($sql);
 	}


 ?>