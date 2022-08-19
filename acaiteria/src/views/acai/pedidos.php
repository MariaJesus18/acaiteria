<?php 
//Exibindo os dados das duas entidades cadastradas
//Pedidos(o açai montado) e Clientes(os dados do clientes)

$conexao = new SQLite3('./banco.db');
$consulta = "SELECT * FROM Pedido;";
$resultado = $conexao->query($consulta);
$consulta2 = "SELECT * FROM Clientes;";
$resultado2 = $conexao->query($consulta2);




?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pedidos dos clientes</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		table{
			width: 100%;
		}
	</style>
</head>
<body>

<!-- Essa página possui os pedidos e quem os pediu, ou seja, listando as entidades -->
	<nav class="ped">
		<div class="subped">
			<a>Pedidos / Clientes</a>
		</div>
	</nav>


	<section class="tabelas">
		<div class="texto">

			<div class="conteiner">
				<div class="colunas1">
					<h3 class="tt">Tamanho</h3>
					<?php
					while ($row = $resultado->fetchArray()) {
						echo  
						"<table  class='tabelas2'>
						<tr >
						<td class='tt'>".$row['Tamanho']."</td>
						</tr>
						</table>";

					} 
					?>
				</div>
				<div class="colunas">
					<h3 class="tt">Sabores</h3>
					<?php
					while ($row = $resultado->fetchArray()) {
						echo 
						"<table>
						<tr>
						<td class='tt'>".$row['Sabor']."</td>
						</tr>
						</table>";
					}
					?>
				</div>

				<div class="colunas">
					<h3 class="tt">Acompa. 1</h3>

					<?php
					while ($row = $resultado->fetchArray()) {
						echo
						"<table>
						<tr>
						<td class='tt'>".$row['Acompanhamento_um']."</td>
						</tr>
						</table>";

					}
					?>
				</div>

				<div class="colunas">
					<h3 class="tt">Acompa. 2</h3>

					<?php
					while ($row = $resultado->fetchArray()) {
						echo "<table>
						<tr>
						<td class='tt'>".$row['Acompanhamento_dois']."</td>
						</tr>
						</table>";

					}
					?>
				</div>

				<div class="colunas">
					<h3 class="tt">Acompa. 3</h3>

					<?php
					while ($row = $resultado->fetchArray()) {
						echo "<table>
						<tr>
						<td class='tt'>".$row['Acompanhamento_tres']."</td>
						</tr>
						</table>"; 

					}
					?>
				</div>

				<div class="colunas">
					<h3 class="tt">Acompa. 4</h3>

					<?php
					while ($row = $resultado->fetchArray()) {
						echo  "<table>
						<tr>
						<td class='tt'>".$row['Acompanhamento_quatro']."</td>
						</tr>
						</table>";

					}
					?>
				</div>

				<div class="colunas">
					<h3 class="tt">Frunta 1</h3>

					<?php
					while ($row = $resultado->fetchArray()) {
						echo "<table>
						<tr>
						<td class='tt'>".$row['Fruta_um']."</td>
						</tr>
						</table>";

					}
					?>
				</div>


				<div class="colunas">
					<h3 class="tt">Frunta 2</h3>

					<?php
					while ($row = $resultado->fetchArray()) {
						echo "<table>
						<tr>
						<td class='tt'>".$row['Fruta_dois']."</td>
						</tr>
						</table>";

					}
					?>
				</div>

				<div class="colunas">
					<h3 class="tt">Cremes</h3>

					<?php
					while ($row = $resultado->fetchArray()) {
						echo "<table>
						<tr>
						<td class='tt'>".$row['Cremes']."</td>
						</tr>
						</table>";

					}
					?>
				</div>
				<div class="colunas">
					<h3 class="tt">Clientes</h3>
					<?php
					while ($row = $resultado2->fetchArray()) {
						echo 
						"<table>
						<tr>
						<td class='tt'>".$row['nome']."</td>
						</tr>
						</table>";
					}
					?>
				</div>
				<div class="colunas">
					<h3 class="tt">Bairro</h3>
					<?php
					while ($row = $resultado2->fetchArray()) {
						echo 
						"<table>
						<tr>
						<td class='tt'>".$row['Bairro']."</td>
						</tr>
						</table>";
					}
					?>
				</div>
				<div class="colunas">
					<h3 class="tt">Rua</h3>
					<?php
					while ($row = $resultado2->fetchArray()) {
						echo 
						"<table>
						<tr>
						<td class='tt'>".$row['Rua']."</td>
						</tr>
						</table>";
					}
					?>
				</div>
				<div class="colunas">
					<h3 class="tt">Numero</h3>
					<?php
					while ($row = $resultado2->fetchArray()) {
						echo 
						"<table>
						<tr>
						<td class='tt'>".$row['Numero']."</td>
						</tr>
						</table>";
					}
					?>
				</div>
				<div class="colunas">
					<h3 class="tt">celular</h3>
					<?php
					while ($row = $resultado2->fetchArray()) {
						echo 
						"<table>
						<tr>
						<td class='tt'>".$row['celular']."</td>
						</tr>
						</table>";
					}
					?>
				</div>


			</div>
		</div>
	</section>
	
	
</body>
</html>