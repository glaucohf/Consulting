<?php
session_start();
ob_start();

	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
		$id = $_POST["id"];
		$consultor = $_POST["consultor"];
		$tabela = $_POST["tabela"];
		$situacao = $_POST["situacao"];
		$result_usuario = "INSERT INTO consulting01 (ID, consulting_name, consulting_table, consulting_status) VALUES (
						" .$id. ",
						'" .$consultor. "',
						" .$tabela. ",
						" .$situacao. "
						)";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(mysqli_insert_id($conn)){
			//echo "Usuário cadastrado com sucesso: ".$consultor ;
			$_SESSION['msgcad'] = "Consultor cadastrado com sucesso";
			header("Location: administrativo.php");
		}else{
			//echo $result_usuario;
			//echo $resultado_usuario;
			//echo "Erro ao cadastrar o usuário: ".$consultor ;
			$_SESSION['msg'] = "Erro ao cadastrar o Consultor";
		}
?>
