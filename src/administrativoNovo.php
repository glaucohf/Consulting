<?php
session_start();
include_once("conexao.php");
if(!empty($_SESSION['id'])){
	echo "<div class='greet'> Olá, ".$_SESSION['nome'].", seja bem-vindo <br>";
	echo "<a href='sair.php'>Sair</a></div>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");
}

$day = date('d');
$dayDefaultColumnName =  "default_" . $day;
$dayPriorityColumnName = "priority_" . $day;

$sql_usuario = sprintf("SELECT ID, consulting_name, consulting_table, consulting_status, %s, %s, cod, default_count, priority_count FROM consulting01 WHERE old_consulting = 0", $dayDefaultColumnName, $dayPriorityColumnName);
$resultado_usuario = mysqli_query($conn, $sql_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	//$row_usuario = mysqli_fetch_assoc($resultado_usuario);

}
else{
	$_SESSION['msg'] = "Consultor não encontrado!";
	echo $sql_usuario;
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
        <link href="css/administrativo.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

        <style>
            .supercontainer{
                background: rgba(0, 133, 187, 0.41);
            }

            .logo {
                margin: auto;
                display: block;
                max-width: 180px;
                margin-bottom: 27px;
            }

             img.logo {
                width: 100%;
            }

            table {
                width: fit-content;
                margin: auto;
            }

            h2 {
                text-align: center;
            }

            div.i_prioritarios {
                background-color: #0a374a;
                padding-bottom: 30px;
            }

            h2{
                font-family: 'Titillium Web', sans-serif;
            }

            div.i_prioritarios h2{
                color:#fff;
            }

            label {
                font-family: 'Titillium Web',sans-serif;
                padding:3px 15px
            }

            div.container table td {
                border-bottom:1px solid #008cc7;
            }

            div.container{
                padding-bottom:25px;
            }

            body {
                padding-top: 12px !important;

            }
        </style>

	</head>
	<body>
        <img class="logo" src="http://riocoaching.com.br/consulting/img/logos.png">
		<div class="supercontainer">
			<div class="container" >
				<br>
				<h2>Área restrita</h2>

					<table border="0">
					<tr>
						<td><label>Consultor:</label></td>
						<td></td>
						<td><label>Tabela:</label>   </td>
						<td><label>Situação:</label> </td>
						<td><label>Atendidos:</label> </td>
						<td><label>Leads (dia <?php echo $day ?>):</label> </td>
						<td><label>Atendidos:</label> </td>
						<td><label>Prioritários:</label> </td>
					</tr>
					<?php
						while ($row = $resultado_usuario->fetch_row()) {
					?>
							<tr>
								<form action="atualizarDiarioConsultor.php" method="post">
									<td><label><a href='consultores.php?id=<?php echo $row[0] ?>'> <?php echo $row[0] ?></a> </label></td>
									<td><label><?php echo $row[1] ?></label></td>
									<td align="right"><label><?php echo $row[2] ?></label></td>
									<td align="right"><label><?php echo $row[3] ?></label></td>
									<td align="right"><label><?php echo $row[7] ?></label></td>
									<td align="right"><input type="text" name="leadsDia" id="leadsDia"placeholder="Leads do dia" class="form-novos-dados" value=<?php echo $row[4] ?>></td>
									<td align="right"><label><?php echo $row[8] ?></label></td>
									<td align="right"><input type="text" name="leadsPrioritario"  id="leadsPrioritario" placeholder="Prioritários" class="form-novos-dados"  value=<?php echo $row[5] ?> ></td>
									<td><input type="submit" name="btnAtualizar" value="Atualizar" class="btn btn-success"></td>
									<input type="hidden" name="cod" value= <?php echo $row[6] ?>>
									<input type="hidden" name="day" value= <?php echo $day ?>>
								</form>
							</tr>
					<?php
						}
					?>
					<form action="cadastrarConsultor.php" method="post">
					<tr>
						<td><input type="text" name="id" placeholder="Código" class="form-novos-dados"></td>
						<td><input type="text" name="consultor" placeholder="Nome do Consultor" class="form-novo-consultor"></td>
						<td><input type="text" name="tabela" placeholder="Tabela" class="form-novos-dados"></td>
						<td><input type="text" name="situacao" placeholder="Situação" class="form-novos-dados"></td>						
						<td colspan="2" align="right"><input type="text" name="leadsDia" placeholder="Leads" class="form-novos-dados"></td>
						<td colspan="2" align="right"><input type="text" name="leadsPrioritario" placeholder="Prioritários" class="form-novos-dados"></td>
					</tr>
					<tr>
						<td><input type="submit" name="btnCadastrar" value="Cadastrar" class="btn btn-success"></td>

					</tr>
					</form>
					</table>
			</div>
			<div class="i_prioritarios">
					<br>
					<table border="0" class="i_prioritarios">
					<h2>Interests Prioritários:</h2>

					<form action="salvarInterest.php" method="post">
					<tr>
					<?php
						$sql_interests = "SELECT interest FROM distribuidor.priority_interest WHERE priority_interest_status = 1";
						$result_interests = mysqli_query($conn, $sql_interests);
						if(($result_interests) AND ($result_interests->num_rows != 0)){
							//$row_usuario = mysqli_fetch_assoc($resultado_usuario);

						}
						else{
							$_SESSION['msg'] = "Não há interests prioritários cadastrados!";
						}
						$i = 1;

						while ($rowInterest = $result_interests->fetch_row()) {

					?>
							<td><input type="text" name="interest<?php echo $i ?>"  value="<?php echo $rowInterest['0'] ?>" class="form-interest">    </td>

						<?php
							$i++;
						}
						while ($i<=5){
						?>
								<td><input type="text" name="interest<?php echo $i ?>"  value="<?php echo $rowInterest['0'] ?>" class="form-interest">    </td>
						<?php
								$i++;
						}
						?>
						<tr>
							<td><BR></td>
						</tr>
						<tr colspan="5">
							<td><input type="submit" name="btnLogin" value="Atualizar" class="btn btn-success"></td>
						</tr>
					</form>
					</tr>
					</table>


			</div>
		</div>
		<br>
		<div><h2><center><label><?php echo $_GET['msg'];?></label></h2><center>
		<div>
	</body>
</html>
