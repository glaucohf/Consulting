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
  $login = $_POST['login'];

  $senha = $_POST['senha'];


  if($login == "" || $login == null){

    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
		  	$conn = getConnection();

			$query = sprintf("INSERT INTO usuarios (login,senha) VALUES (%s,%s )", $login, $senha);
	
			if ($conn->query($query)) {
				$msg2log = sprintf(  "Usuario criado: %s " , $query );
				//logMsg( $msg2log );
				echo( $msg2log );
				echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
			}
			else{
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
				echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
			}

    }

?>