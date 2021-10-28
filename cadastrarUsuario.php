<!doctype html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="css/base.css">
		<script type="text/javascript">
			function valida(){
				var usuario = document.getElementById("user");
				var senha = document.getElementById("pwd");
				var repsenha = document.getElementById("reppwd");
				var msg = document.getElementById("msg");
				
				if(!usuario.value)
				{
					msg.innerHTML = "Usuário não informado!";
					return false;
				}
				
				if(!senha.value)
				{
					msg.innerHTML = "Senha não informado!";
					return false;
				}				
				
				if(!repsenha.value)
				{
					msg.innerHTML = "Repita a senha!";
					return false;
				}				
				
				if(senha.value != repsenha.value)
				{
					msg.innerHTML = "Senha repetida diferente da senha informada!";
					return false;
				}
				
				return true;
			}
		</script>
	</head>
	<body>
		<div class="corpo">
			<h1>Petshop Animal</h1>
			<form action="action/cadastrarUsuario.php" method="POST" onsubmit="return valida();">
				<fieldset>
					<legend>Cadastrar Usuário</legend>
							
					<div class="form-group">
						<label for="user">Usuário</label>
						<input type="text" maxlength="15" placeholder="Usuário" class="form-control" name="usuario" id="user">
					</div>
					
					<div class="form-group">
						<label for="pwd">Senha</label>
						<input type="password" placeholder="Senha" class="form-control" maxlength="8" name="senha" id="pwd">			
					</div>
					
					<div class="form-group">
						<label for="reppwd">Repetir Senha</label>
						<input type="password" placeholder="Repetir Senha" class="form-control" maxlength="8" name="repsenha" id="reppwd">
					</div>				
					
					<div class="form-group">
						<label for="type">Tipo de Acesso</label>
						<select class="form-control" name="tipo" id="type">
							<option value="1">Comum</option>
							<option value="2">Administrador</option>
						</select>
					</div>								
					
					<input type="submit" class="btn btn-default" value="Cadastrar">
					<span id="msg"></span>
				</fieldset>
			</div>
		</form>
	</body>
</html>