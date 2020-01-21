<?php
session_start();
include_once("conexao.php");
$id = $_GET['id'];

$result_usuario = "SELECT * FROM consulting01 WHERE id=". $id;
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);
	$_SESSION['id'] = $row_usuario['id'];
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
				
				<form method="POST" action="atualiza.php">
					<table border="0">
					<tr>
						<td><label>Consultor:</label></td>
						<td></td>
						<td><label>Tabela:</label>   </td>
						<td><label>Situação:</label> </td>
					</tr>
					<tr>
						<td><input type="text" name="codigo" value="<?php echo $row_usuario['id'] ?>" class="form-dados"></td>   
						<td><input type="text" name="nome" value="<?php echo $row_usuario['consulting_name'] ?>" class="form-consultor"></td>    
						<td><input type="text" name="tabela" value="<?php echo $row_usuario['consulting_table'] ?>" class="form-dados"></td>  
						<td><input type="text" name="Situacao" value="<?php echo $row_usuario['consulting_status'] ?>" class="form-dados"></td>
					</tr>
					</table>
					<br>
					<table border="0">
					<tr>
						<td></td>
						<td align="center"><label>01</label></td>
						<td align="center"><label>02</label></td>
						<td align="center"><label>03</label></td>
						<td align="center"><label>04</label></td>
						<td align="center"><label>05</label></td>
						<td align="center"><label>06</label></td>
						<td align="center"><label>07</label></td>
						<td align="center"><label>08</label></td>
						<td align="center"><label>09</label></td>
						<td align="center"><label>10</label></td>
						<td align="center"><label>11</label></td>
						<td align="center"><label>12</label></td>
						<td align="center"><label>13</label></td>
						<td align="center"><label>14</label></td>
						<td align="center"><label>15</label></td>
						<td align="center"><label>16</label></td>
						<td align="center"><label>17</label></td>
						<td align="center"><label>18</label></td>
						<td align="center"><label>19</label></td>
						<td align="center"><label>20</label></td>
						<td align="center"><label>21</label></td>
						<td align="center"><label>22</label></td>
						<td align="center"><label>23</label></td>
						<td align="center"><label>24</label></td>
						<td align="center"><label>25</label></td>
						<td align="center"><label>26</label></td>
						<td align="center"><label>27</label></td>
						<td align="center"><label>28</label></td>
						<td align="center"><label>29</label></td>
						<td align="center"><label>30</label></td>
						<td align="center"><label>31</label></td>
					</tr>
						<td><b>Contador: </b></td>
						<td><input type="text" name="defaultQtd01"  value="<?php echo $row_usuario['default_01'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd02"  value="<?php echo $row_usuario['default_02'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd03"  value="<?php echo $row_usuario['default_03'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd04"  value="<?php echo $row_usuario['default_04'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd05"  value="<?php echo $row_usuario['default_05'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd06"  value="<?php echo $row_usuario['default_06'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd07"  value="<?php echo $row_usuario['default_07'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd08"  value="<?php echo $row_usuario['default_08'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd09"  value="<?php echo $row_usuario['default_09'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd10"  value="<?php echo $row_usuario['default_10'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd11"  value="<?php echo $row_usuario['default_11'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd12"  value="<?php echo $row_usuario['default_12'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd13"  value="<?php echo $row_usuario['default_13'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd14"  value="<?php echo $row_usuario['default_14'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd15"  value="<?php echo $row_usuario['default_15'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd16"  value="<?php echo $row_usuario['default_16'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd17"  value="<?php echo $row_usuario['default_17'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd18"  value="<?php echo $row_usuario['default_18'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd19"  value="<?php echo $row_usuario['default_19'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd20"  value="<?php echo $row_usuario['default_20'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd21"  value="<?php echo $row_usuario['default_21'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd22"  value="<?php echo $row_usuario['default_22'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd23"  value="<?php echo $row_usuario['default_23'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd24"  value="<?php echo $row_usuario['default_24'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd25"  value="<?php echo $row_usuario['default_25'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd26"  value="<?php echo $row_usuario['default_26'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd27"  value="<?php echo $row_usuario['default_27'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd28"  value="<?php echo $row_usuario['default_28'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd29"  value="<?php echo $row_usuario['default_29'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd30"  value="<?php echo $row_usuario['default_30'] ?>" class="form-dia">    </td>
						<td><input type="text" name="defaultQtd31"  value="<?php echo $row_usuario['default_31'] ?>" class="form-dia">    </td>	
					</tr>
					<tr>
						<td><b>Prioritário:</b></td>
						<td><input type="text" name="qtd01" value="<?php echo $row_usuario['priority_01'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd02" value="<?php echo $row_usuario['priority_02'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd03" value="<?php echo $row_usuario['priority_03'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd04" value="<?php echo $row_usuario['priority_04'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd05" value="<?php echo $row_usuario['priority_05'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd06" value="<?php echo $row_usuario['priority_06'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd07" value="<?php echo $row_usuario['priority_07'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd08" value="<?php echo $row_usuario['priority_08'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd09" value="<?php echo $row_usuario['priority_09'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd10" value="<?php echo $row_usuario['priority_10'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd11" value="<?php echo $row_usuario['priority_11'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd12" value="<?php echo $row_usuario['priority_12'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd13" value="<?php echo $row_usuario['priority_13'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd14" value="<?php echo $row_usuario['priority_14'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd15" value="<?php echo $row_usuario['priority_15'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd16" value="<?php echo $row_usuario['priority_16'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd17" value="<?php echo $row_usuario['priority_17'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd18" value="<?php echo $row_usuario['priority_18'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd19" value="<?php echo $row_usuario['priority_19'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd20" value="<?php echo $row_usuario['priority_20'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd21" value="<?php echo $row_usuario['priority_21'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd22" value="<?php echo $row_usuario['priority_22'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd23" value="<?php echo $row_usuario['priority_23'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd24" value="<?php echo $row_usuario['priority_24'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd25" value="<?php echo $row_usuario['priority_25'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd26" value="<?php echo $row_usuario['priority_26'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd27" value="<?php echo $row_usuario['priority_27'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd28" value="<?php echo $row_usuario['priority_28'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd29" value="<?php echo $row_usuario['priority_29'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd30" value="<?php echo $row_usuario['priority_30'] ?>" class="form-dia"> </td>
						<td><input type="text" name="qtd31" value="<?php echo $row_usuario['priority_31'] ?>" class="form-dia"> </td>	
					</tr>
					
					</table>
					<input type="submit" name="btnLogin" value="Atualizar" class="btn btn-success">
				</form>