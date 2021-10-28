<?php

	require_once "..\conecta.php";
	
	if(isset($_POST["usuario"]))
	{
		$usuario = $_POST["usuario"];
	}
	
	if(isset($_POST["senha"]))
	{
		$senha = $_POST["senha"];
	}

	if(isset($_POST["repsenha"]))
	{
		$repsenha = $_POST["repsenha"];
	}

	$tipo = $_POST["tipo"];
	
	if(empty($usuario) || empty($senha) || empty($repsenha) ||
	  ($senha != $repsenha))
	{
		die("Dados informados incorretamente");
	}
	
	// Adicionando usuario
	
	$sql = "INSERT INTO login (usuario, senha, tipo)
	                    VALUES ('$usuario', md5('$senha'), '$tipo')";
							
	$result = pg_query($sql);
	
	if($result != FALSE)
	{
		die("Dados inseridos com sucesso!");		
	}
	else
	{
		die("Erro ao executar: " . pg_last_error($conn));
	}
?>