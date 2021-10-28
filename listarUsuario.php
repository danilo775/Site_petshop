<!doctype html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="css/base.css">
	</head>
	<body>
		<div class="corpo">
			<h1>Petshop Animal</h1>
			<fieldset>
				<legend>Listar Usuário</legend>
				
				<table class="table">
					<tr>
						<th>Código</th>
						<th>Usuário</th>
						<th>Tipo</th>
						<th></th>
					</tr>
<?php
	require_once "conecta.php";
	
	$result = pg_query("SELECT * FROM login");
	
	if($result != FALSE)
	{
		if(pg_num_rows($result) > 0)
		{
			while($row = pg_fetch_array($result))
			{			
?>						
					<tr>
						<td><?php echo $row["codigo"]; ?></td>
						<td><?php echo $row["usuario"]; ?></td>
						<td><?php echo $row["tipo"] == 1 ? "Comum" : "Administrador"; ?></td>
						<td>
							<img src="img/edit.png" class="icon">
							<img src="img/delete.png" class="icon">
						</td>
					</tr>
<?php
			}
		}
		else
		{
			echo "Não existem dados para geração da tabela";
		}
	}
?>
				</table>
			</fieldset>
			</div>
	</body>
</html>