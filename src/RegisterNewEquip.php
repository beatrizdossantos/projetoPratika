<?php
include 'Connection.php';
$nome = $_POST['nome'];
$preço = $_POST['preço'];
$tempoHoras = $_POST['tempoHoras'];
$descrição = $_POST['descrição'];
$codProfessor = $_POST['codProfessor'];
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
		$conecta = $connection->prepare("INSERT INTO equipamentos(codProfessor,nome,preço,tempoHoras,descrição) VALUES ('$codProfessor','$nome','$preço','$tempoHoras','$descrição')");
        	/*}*/
        $conecta->execute();
        
?>

<script>
	alert("EQUIPAMENTO ADICIONADO COM SUCESSO!");
	location.href = "meusequipamentosProf.php";
</script>