<?php 
header('content-type: text/html; charset:utf-8');

session_start();
if((!isset($_SESSION['codUsuario'])==true) and (!isset($_SESSION['senha'])==true) and (!isset($_SESSION['email'])==true)) {
  unset($_SESSION['codUsuario']);
  unset($_SESSION['senha']);
  unset($_SESSION['email']);
  header('Location: login.php');
}
include 'Connection.php';

$codUsuario = $_SESSION['codUsuario'];
$codAtividade = $_POST['codAtividade'];
$nome = $_POST['nome'];
$comentario = $_POST['comentario'];

/*
$consultaCod = "SELECT codLocal FROM locais WHERE codLocal LIKE '$codLocal'";
$resultado = $connection->query($consultaCod);
$registros = $resultado->num_rows;

$resultado_consulta = mysqli_fetch_assoc($resultado);


	if ($registros>0){ ?>
		<script>
			alert("Esse código não está disponível");
			location.href = "../addLocalProf.php";
		</script> <?php  
	} elseif ($senha !== $re_senha) {?>
		<script>
			alert("As duas senhas devem ser iguais!");
			location.href = "../cadastro.php";
		</script> <?php
	}else{*/
		$consulta = $connection->prepare("INSERT INTO chat (autorUser, codAtividade, nome,comentario) VALUES ('$codUsuario','$codAtividade','$nome','$comentario')");

        $consulta->execute();
	/*}*/
?>

<script>
	alert("Comentário Enviado!");
	location.href = "../homeUser.php";
</script>