<?php
session_start();
include_once("conexao.php");
if(!empty($_SESSION['id'])){
	echo "Olá, ".$_SESSION['nome'].", seja bem-vindo <br>";
	echo "<a href='sair.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");	
}

$result_usuario = "SELECT ID, consulting_name, consulting_table, consulting_status FROM consulting01 WHERE old_consulting = 0";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	//$row_usuario = mysqli_fetch_assoc($resultado_usuario);

}
else{
	$_SESSION['msg'] = "Consultor não encontrado!";
	echo $result_usuario;
	echo "consultor não encontrado";
}
	

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Distribuidor </title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div>
			<div style="background: #42dea4;">
				<h2>Área restrita</h2>
				
					<table border="0">
					<tr>
						<td><label>Consultor:</label></td>
						<td></td>
						<td><label>Tabela:</label>   </td>
						<td><label>Situação:</label> </td>
					</tr>
					<?php 		
						while ($row = $resultado_usuario->fetch_row()) {
					?>
							<tr>
								<td><label><a href='consultores.php?id=<?php echo $row[0] ?>'> <?php echo $row[0] ?></a> </label></td>   
								<td><label><?php echo $row[1] ?></label></td>    
								<td align="right"><label><?php echo $row[2] ?></label></td>  
								<td align="right"><label><?php echo $row[3] ?></label></td>
							</tr>
					<?php
						}
					?>
					</table>
				</form>
			</div>
		</div>
		<br>
		<div><h2><center><label><?php echo $_GET['msg'];?></label></h2><center>
		<div>
	</body>
</html>