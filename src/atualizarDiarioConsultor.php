<?php
session_start();
ob_start();

	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		$cod = $_POST["cod"];
		$day = $_POST["day"];
		$leadsDia = $_POST["leadsDia"];
		$leadsPrioritario = $_POST["leadsPrioritario"];



		$dayDefaultColumnName =  "default_" . $day;
		$dayPriorityColumnName = "priority_" . $day;

		$login = $_SESSION['nome'];
		$redirect = "Location: administrativo.php";

		$query = sprintf("UPDATE consulting01 SET %s = %s, %s = %s WHERE cod = %s", $dayDefaultColumnName, $leadsDia, $dayPriorityColumnName, $leadsPrioritario, $cod);

		if ($conn->query($query)) {
			$msg2log = sprintf(  "Consultor atualizado: %s " , $query );
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
		header($redirect);

?>
