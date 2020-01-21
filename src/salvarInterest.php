<?php
session_start();
include_once("conexao.php");

$interest[1] = filter_input(INPUT_POST, 'interest1', FILTER_SANITIZE_STRING);
$interest[2] = filter_input(INPUT_POST, 'interest2', FILTER_SANITIZE_STRING);
$interest[3] = filter_input(INPUT_POST, 'interest3', FILTER_SANITIZE_STRING);
$interest[4] = filter_input(INPUT_POST, 'interest4', FILTER_SANITIZE_STRING);
$interest[5] = filter_input(INPUT_POST, 'interest5', FILTER_SANITIZE_STRING);


$login = $_SESSION['nome'];
$redirect = "Location: administrativo.php";

$query = sprintf("UPDATE priority_interest SET priority_interest_status = %s", 0);

	if ($conn->query($query)) {
		$msg2log = sprintf(  "Interests atualizados: %s " , $query );
		$queryToLog = sprintf("INSERT INTO log (login, query) VALUES ('%s', '%s' )", $login, $query);
		
		if ($conn->query($queryToLog)) {
			$msg2log = sprintf(  "Log: %s " , $queryToLog );
			$redirect = "Location: administrativo.php?msg=Dados atualizados.";
		}
		else{
			$message  = 'Invalid query: ' . mysql_error() . "\n";
			$message .= 'Whole query: ' . $query;
			$redirect = "Location: administrativo.php?msg=Erro ao atualizar.";
			die($message);
		}
			
	}
	else{
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}
	//header($redirect);	
	$i=1;
	while ($i<=5){

		$sql_interest = sprintf("INSERT INTO distribuidor.priority_interest (interest, priority_interest_status) VALUES ('%s', %s )", $interest[$i], 1);
		
		$resultado_interest = mysqli_query($conn, $sql_interest);
		if(mysqli_insert_id($conn)){
			$_SESSION['msgcad'] = "Interests cadastrados com sucesso";
			$redirect = "Location: administrativo.php?msg=Dados atualizados.";
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar interests";
		}
		$i++;
	}
	header($redirect);

?>