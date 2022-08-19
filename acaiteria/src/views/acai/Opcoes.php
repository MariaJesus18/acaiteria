<?php

// Salvando os dados do acai no banco de dados

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === "POST") {

	$tamanho = $_POST['Tamanho'];
	$sabores = $_POST['Sabores'];
	$acom_um = $_POST['Acompanhamento_um'];
	$acom_dois = $_POST['Acompanhamento_dois'];
	$acom_tres = $_POST['Acompanhamento_tres'];
	$acom_quatro = $_POST['Acompanhamento_quatro'];
	$fruta_um = $_POST['Fruta_um'];
	$fruta_dois = $_POST['Fruta_dois'];
	$cremes = $_POST['Cremes'];
	
	// conexao com o banco
	$conexao = new SQLite3('./banco.db');

	// TER UMA TABELA
	$table = "CREATE TABLE IF NOT EXISTS Pedido (Tamanho TEXT, Sabor TEXT, Acompanhamento_um TEXT, Acompanhamento_dois TEXT, Acompanhamento_tres TEXT, Acompanhamento_quatro TEXT, Fruta_um TEXT, Fruta_dois TEXT, Cremes TEXT);";
	$conexao->exec($table);

	//salvar dados
	$insert = "INSERT INTO Pedido(Tamanho, Sabor, Acompanhamento_um, Acompanhamento_dois, Acompanhamento_tres, Acompanhamento_quatro, Fruta_um, Fruta_dois, Cremes) VALUES('$tamanho', '$sabores', '$acom_um', '$acom_dois', '$acom_tres', '$acom_quatro', '$fruta_um', '$fruta_dois', '$cremes');"; 
	$conexao->exec($insert);
	header("Location: /Clientes", true, 302);
	exit;
}


?> 

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cardapio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- página para o usúario montar seu açai -->

	<nav >
		<div class="logo">
			<a>Cardápio</a></div>
		</nav>

		<section class="banner">
			<div class="texto">
				<form action="/Opcoes" method="POST">

					<div class="menu">
						<a> Tamanhos </a>
						<center>
							<select name="Tamanho">

								<option value="300ml">300ml - 10 Reais</option>
								<option value="500ml">500ml - 15 reais</option>
								<option value="700ml">700ml - 20 reais</option>
								<option value="1kg">1kg - 27 reais</option>
							</select>
						</center>
					</div>

					<div class="menu">
						<a>Selecione um sabor</a>
						<center>
							<select name="Sabores">
								<option value="Tradicional">Tradicional</option>
								<option value="Banana">Banana</option>
								<option value="Morango">Morango</option>
								<option value="Chocolate">Chocolate</option>
								<option value="Zero">Zero</option>
							</select>
						</center>
					</div>

					<div class="menu">
						<a> Escolha até 4 acompanhamentos </a>
						<center>
							<select name="Acompanhamento_um">
								<option value="Nenhum">Nenhum</option>
								<option value="Amendoin">Amendoin</option>
								<option value="Bis">Bis</option>
								<option value="Castanha">Castanha</option>
								<option value="Chocoboll">Chocoboll</option>
								<option value="Gotasdechocolate">Gotas de chocolate</option>
								<option value="Leiteempó">Leite em pó</option>
								<option value="M&M">M&M</option>
								<option value="Paçoca">Paçoca</option>
							</select>

							<select name="Acompanhamento_dois">
								<option value="Nenhum">Nenhum</option>
								<option value="Amendoin">Amendoin</option>
								<option value="Bis">Bis</option>
								<option value="Castanha">Castanha</option>
								<option value="Chocoboll">Chocoboll</option>
								<option value="Gotas de chocolate">Gotas de chocolate</option>
								<option value="Leite em pó">Leite em pó</option>
								<option value="M&M">M&M</option>
								<option value="Paçoca">Paçoca</option>
							</select>

							<select name="Acompanhamento_tres">
								<option value="Nenhum">Nenhum</option>
								<option value="Amendoin">Amendoin</option>
								<option value="Bis">Bis</option>
								<option value="Castanha">Castanha</option>
								<option value="Chocoboll">Chocoboll</option>
								<option value="Gotas de chocolate">Gotas de chocolate</option>
								<option value="Leite em pó">Leite em pó</option>
								<option value="M&M">M&M</option>
								<option value="Paçoca">Paçoca</option>
							</select>


							<select name="Acompanhamento_quatro">
								<option value="Nenhum">Nenhum</option>
								<option value="Amendoin">Amendoin</option>
								<option value="Bis">Bis</option>
								<option value="Castanha">Castanha</option>
								<option value="Chocoboll">Chocoboll</option>
								<option value="Gotas de chocolate">Gotas de chocolate</option>
								<option value="Leite em pó">Leite em pó</option>
								<option value="M&M">M&M</option>
								<option value="Paçoca">Paçoca</option>
							</select></center>
						</div>

						<div class="menu">
							<a> Escolha até 2 frutas </a>
							<center>
								<select name="Fruta_um">
									<option value="Nenhum">Nenhum</option>
									<option value="Banana">Banana</option>
									<option value="Cereja">Cereja</option>
									<option value="Kiwi">Kiwi</option>
									<option value="Morango">Morango</option>
								</select>

								<select name="Fruta_dois">
									<option value="Nenhum">Nenhum</option>
									<option value="Banana">Banana</option>
									<option value="Cereja">Cereja</option>
									<option value="Kiwi">Kiwi</option>
									<option value="Morango">Morango</option>
								</select></center>
							</div>

							<div class="menu">
								<a>Escolha uma creme</a>
								<center>
									<select name="Cremes">
										<option value="Nenhum">Nenhum</option>
										<option value="Chocolate">Chocolate</option>
										<option value="Cookie">Cookie</option>
										<option value="Leite condesado">Leite condesado</option>
										<option value="Amendoiam">Amendoim</option>
									</select></center>
								</div>

								<div class="botoes">
									<button class="overlay">Enviar</button>
								</div>

							</form>

						</div>
					</section>


				</body>
				</html>