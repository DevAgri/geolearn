<html>
<head>
<title>Cadastro de Aluno</title>
</head>
<body>

<p> CADASTRO DE ALUNO </P>

<?php

require("conectadb.php"); //chama o arquivo de conexão ao BD

	$id_fazenda = $_POST['id_fazenda'];
	$setor   = $_POST['setor'];
	$talhao   = $_POST['talhao'];
	$pluviosidade = $_POST['pluviosidade'];
	$mes = $_POST['mes'];
	$produtividade = $_POST['produtividade'];

	$consulta = "INSERT INTO producao (id_fazenda, setor, talhao, pluviosidade, mes, produtividade)
	VALUES ('$id_fazenda','$setor', '$talhao','$pluviosidade','$mes', '$produtividade')";

	$mostrar = mysql_query($consulta)
	or die("Falha na execução de inserção");
	echo "Inserção OK";  
	
//Fechar a conexao
	mysql_close($conn);
?>

</body>
</html>