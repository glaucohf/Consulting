<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Distribuidor - Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
        
	</head>
	<body>
		<div class="container">
            <img class="logo" src="http://riocoaching.com.br/consulting/img/logos.png">
			<div class="form-signin" >
				<h2>Área restrita</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="valida.php">
					<label>Usuário</label>
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					
					<label>Senha</label>
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>
					
					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success">
				
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>