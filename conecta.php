<?php
	$conn = pg_connect("host=localhost port=5432 dbname=petBase
						user=postgres password=1");
	
	if($conn == FALSE)
	{
		die("Erro ao conectar ao banco de dados: " . pg_last_error($conn));
	}
?>