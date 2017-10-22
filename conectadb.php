<html>
<head>
<title>Página Conexao</title>
</head>
<body>

<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$local_serve = "localhost";    //local do servidor
	$usuario = "root";       //nome do usuario
	$senha = "";                //senha
	$banco_dados = "dados"; //nome do banco 

	$conn = mysql_connect($local_serve,$usuario,$senha) 
	or die ("O SERVIDOR NAO RESPONDE!");

// conecta-se ao banco de dados
	$db = mysql_select_db($banco_dados,$conn)
	or die ("Não foi possivel conectar-se ao Banco de Dados!");

	$consulta = "SELECT * FROM usuarios";
	$mostrar = mysql_query($consulta)
	or die("Falha na execução da consulta");
	//echo "Consulta executada com sucesso<br>";

?>  

</body>
</html>
