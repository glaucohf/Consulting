<?php

function getConnection(){
	$servername = "52.67.235.248";
	$username = "dist";
	$password = "gr2t1d2o2019";
	$dbname = "distribuidor";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	return $conn;
}

  $conn = getConnection();
  echo "login";

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $authenticated = false;

  echo $senha;		

	$query = sprintf("SELECT * FROM usuarios WHERE login = '%s' AND senha = MD5('%s')", $login, $senha);
	
	$msg2log = sprintf(  "Busca de usuário: %s " , $query );
	//logMsg( $msg2log );
	echo $msg2log;
		
	if ($result = $conn->query($query)) {
		echo "executado ";
		
		while ($row = $result->fetch_row()) {
			$authenticated = true;
			echo "encontrado";
		}

		//$result->close();
		
	}
	else{
		echo "Nãoexecutado.";
	}

	if ($authenticated){
		echo "achou ";
		setcookie("login",$login);
		header("Location:index.php");
	}else{
		echo "nao achou ";
		echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
		die();
	}
	
?>