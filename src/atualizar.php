<?php
session_start();
include_once("conexao.php");
$id = $consulting_status = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$consulting_status = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);
$consulting_table = filter_input(INPUT_POST, 'tabela', FILTER_SANITIZE_STRING);
$old_consulting = filter_input(INPUT_POST, 'ocultar', FILTER_SANITIZE_STRING);

$default01 = filter_input(INPUT_POST, 'defaultQtd01', FILTER_SANITIZE_STRING);
$default02 = filter_input(INPUT_POST, 'defaultQtd02', FILTER_SANITIZE_STRING);
$default03 = filter_input(INPUT_POST, 'defaultQtd03', FILTER_SANITIZE_STRING);
$default04 = filter_input(INPUT_POST, 'defaultQtd04', FILTER_SANITIZE_STRING);
$default05 = filter_input(INPUT_POST, 'defaultQtd05', FILTER_SANITIZE_STRING);
$default06 = filter_input(INPUT_POST, 'defaultQtd06', FILTER_SANITIZE_STRING);
$default07 = filter_input(INPUT_POST, 'defaultQtd07', FILTER_SANITIZE_STRING);
$default08 = filter_input(INPUT_POST, 'defaultQtd08', FILTER_SANITIZE_STRING);
$default09 = filter_input(INPUT_POST, 'defaultQtd09', FILTER_SANITIZE_STRING);
$default10 = filter_input(INPUT_POST, 'defaultQtd10', FILTER_SANITIZE_STRING);
$default11 = filter_input(INPUT_POST, 'defaultQtd11', FILTER_SANITIZE_STRING);
$default12 = filter_input(INPUT_POST, 'defaultQtd12', FILTER_SANITIZE_STRING);
$default13 = filter_input(INPUT_POST, 'defaultQtd13', FILTER_SANITIZE_STRING);
$default14 = filter_input(INPUT_POST, 'defaultQtd14', FILTER_SANITIZE_STRING);
$default15 = filter_input(INPUT_POST, 'defaultQtd15', FILTER_SANITIZE_STRING);
$default16 = filter_input(INPUT_POST, 'defaultQtd16', FILTER_SANITIZE_STRING);
$default17 = filter_input(INPUT_POST, 'defaultQtd17', FILTER_SANITIZE_STRING);
$default18 = filter_input(INPUT_POST, 'defaultQtd18', FILTER_SANITIZE_STRING);
$default19 = filter_input(INPUT_POST, 'defaultQtd19', FILTER_SANITIZE_STRING);
$default20 = filter_input(INPUT_POST, 'defaultQtd20', FILTER_SANITIZE_STRING);
$default21 = filter_input(INPUT_POST, 'defaultQtd21', FILTER_SANITIZE_STRING);
$default22 = filter_input(INPUT_POST, 'defaultQtd22', FILTER_SANITIZE_STRING);
$default23 = filter_input(INPUT_POST, 'defaultQtd23', FILTER_SANITIZE_STRING);
$default24 = filter_input(INPUT_POST, 'defaultQtd24', FILTER_SANITIZE_STRING);
$default25 = filter_input(INPUT_POST, 'defaultQtd25', FILTER_SANITIZE_STRING);
$default26 = filter_input(INPUT_POST, 'defaultQtd26', FILTER_SANITIZE_STRING);
$default27 = filter_input(INPUT_POST, 'defaultQtd27', FILTER_SANITIZE_STRING);
$default28 = filter_input(INPUT_POST, 'defaultQtd28', FILTER_SANITIZE_STRING);
$default29 = filter_input(INPUT_POST, 'defaultQtd29', FILTER_SANITIZE_STRING);
$default30 = filter_input(INPUT_POST, 'defaultQtd30', FILTER_SANITIZE_STRING);
$default31 = filter_input(INPUT_POST, 'defaultQtd31', FILTER_SANITIZE_STRING);

$priority01 = filter_input(INPUT_POST, 'priorityQtd01', FILTER_SANITIZE_STRING);
$priority02 = filter_input(INPUT_POST, 'priorityQtd02', FILTER_SANITIZE_STRING);
$priority03 = filter_input(INPUT_POST, 'priorityQtd03', FILTER_SANITIZE_STRING);
$priority04 = filter_input(INPUT_POST, 'priorityQtd04', FILTER_SANITIZE_STRING);
$priority05 = filter_input(INPUT_POST, 'priorityQtd05', FILTER_SANITIZE_STRING);
$priority06 = filter_input(INPUT_POST, 'priorityQtd06', FILTER_SANITIZE_STRING);
$priority07 = filter_input(INPUT_POST, 'priorityQtd07', FILTER_SANITIZE_STRING);
$priority08 = filter_input(INPUT_POST, 'priorityQtd08', FILTER_SANITIZE_STRING);
$priority09 = filter_input(INPUT_POST, 'priorityQtd09', FILTER_SANITIZE_STRING);
$priority10 = filter_input(INPUT_POST, 'priorityQtd10', FILTER_SANITIZE_STRING);
$priority11 = filter_input(INPUT_POST, 'priorityQtd11', FILTER_SANITIZE_STRING);
$priority12 = filter_input(INPUT_POST, 'priorityQtd12', FILTER_SANITIZE_STRING);
$priority13 = filter_input(INPUT_POST, 'priorityQtd13', FILTER_SANITIZE_STRING);
$priority14 = filter_input(INPUT_POST, 'priorityQtd14', FILTER_SANITIZE_STRING);
$priority15 = filter_input(INPUT_POST, 'priorityQtd15', FILTER_SANITIZE_STRING);
$priority16 = filter_input(INPUT_POST, 'priorityQtd16', FILTER_SANITIZE_STRING);
$priority17 = filter_input(INPUT_POST, 'priorityQtd17', FILTER_SANITIZE_STRING);
$priority18 = filter_input(INPUT_POST, 'priorityQtd18', FILTER_SANITIZE_STRING);
$priority19 = filter_input(INPUT_POST, 'priorityQtd19', FILTER_SANITIZE_STRING);
$priority20 = filter_input(INPUT_POST, 'priorityQtd20', FILTER_SANITIZE_STRING);
$priority21 = filter_input(INPUT_POST, 'priorityQtd21', FILTER_SANITIZE_STRING);
$priority22 = filter_input(INPUT_POST, 'priorityQtd22', FILTER_SANITIZE_STRING);
$priority23 = filter_input(INPUT_POST, 'priorityQtd23', FILTER_SANITIZE_STRING);
$priority24 = filter_input(INPUT_POST, 'priorityQtd24', FILTER_SANITIZE_STRING);
$priority25 = filter_input(INPUT_POST, 'priorityQtd25', FILTER_SANITIZE_STRING);
$priority26 = filter_input(INPUT_POST, 'priorityQtd26', FILTER_SANITIZE_STRING);
$priority27 = filter_input(INPUT_POST, 'priorityQtd27', FILTER_SANITIZE_STRING);
$priority28 = filter_input(INPUT_POST, 'priorityQtd28', FILTER_SANITIZE_STRING);
$priority29 = filter_input(INPUT_POST, 'priorityQtd29', FILTER_SANITIZE_STRING);
$priority30 = filter_input(INPUT_POST, 'priorityQtd30', FILTER_SANITIZE_STRING);
$priority31 = filter_input(INPUT_POST, 'priorityQtd31', FILTER_SANITIZE_STRING);

$login = $_SESSION['nome'];
$redirect = "Location: administrativo.php";

$query = sprintf("UPDATE consulting01 SET old_consulting = %s, consulting_status = %s, consulting_table = %s, default_01 = %s, default_02 = %s, default_03 = %s, default_04 = %s, default_05 = %s, default_06 = %s, default_07 = %s, default_08 = %s, default_09 = %s, default_10 = %s, default_11 = %s, default_12 = %s, default_13 = %s, default_14 = %s, default_15 = %s, default_16 = %s, default_17 = %s, default_18 = %s, default_19 = %s, default_20 = %s, default_21 = %s, default_22 = %s, default_23 = %s, default_24 = %s, default_25 = %s, default_26 = %s, default_27 = %s, default_28 = %s, default_29 = %s, default_30 = %s, default_31 = %s, priority_01 = %s, priority_02 = %s, priority_03 = %s, priority_04 = %s, priority_05 = %s, priority_06 = %s, priority_07 = %s, priority_08 = %s, priority_09 = %s, priority_10 = %s, priority_11 = %s, priority_12 = %s, priority_13 = %s, priority_14 = %s, priority_15 = %s, priority_16 = %s, priority_17 = %s, priority_18 = %s, priority_19 = %s, priority_20 = %s, priority_21 = %s, priority_22 = %s, priority_23 = %s, priority_24 = %s, priority_25 = %s, priority_26 = %s, priority_27 = %s, priority_28 = %s, priority_29 = %s, priority_30 = %s, priority_31 = %s WHERE id = %s", 
$old_consulting, $consulting_status, $consulting_table, $default01, $default02, $default03, $default04, $default05, $default06, $default07, $default08, $default09, $default10, $default11, $default12, $default13, $default14, $default15, $default16, $default17, $default18, $default19, $default20, $default21, $default22, $default23, $default24, $default25, $default26, $default27, $default28, $default29, $default30, $default31, $priority01, $priority02, $priority03, $priority04, $priority05, $priority06, $priority07, $priority08, $priority09, $priority10, $priority11, $priority12, $priority13, $priority14, $priority15, $priority16, $priority17, $priority18, $priority19, $priority20, $priority21, $priority22, $priority23, $priority24, $priority25, $priority26, $priority27, $priority28, $priority29, $priority30, $priority31, $id );
// , default_02 = %s, default_03 = %s, default_04 = %s, default_05 = %s, default_06 = %s, default_07 = %s, default_08 = %s, default_09 = %s, default_10 = %s, default_11 = %s, default_12 = %s, default_13 = %s, default_14 = %s, default_15 = %s, default_16 = %s, default_17 = %s, default_18 = %s, default_19 = %s, default_20 = %s, default_21 = %s, default_22 = %s, default_23 = %s, default_24 = %s, default_25 = %s, default_26 = %s, default_27 = %s, default_28 = %s, default_29 = %s, default_30 = %s, default_31 = %s, priority_01 = %s, priority_02 = %s, priority_03 = %s, priority_04 = %s, priority_05 = %s, priority_06 = %s, priority_07 = %s, priority_08 = %s, priority_09 = %s, priority_10 = %s, priority_11 = %s, priority_12 = %s, priority_13 = %s, priority_14 = %s, priority_15 = %s, priority_16 = %s, priority_17 = %s, priority_18 = %s, priority_19 = %s, priority_20 = %s, priority_21 = %s, priority_22 = %s, priority_23 = %s, priority_24 = %s, priority_25 = %s, priority_26 = %s, priority_27 = %s, priority_28 = %s, priority_29 = %s, priority_30 = %s, priority_31 = %s WHERE id = %s", 

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
//exit();

?>
