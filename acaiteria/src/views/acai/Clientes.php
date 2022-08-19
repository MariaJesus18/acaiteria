<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === "POST") {

	$nome = $_POST['nome'];
	$bairro = $_POST['Bairro'];
	$rua = $_POST['Rua'];
	$numero = $_POST['Numero'];
	$celular = $_POST['celular'];
	
	// conexao com o banco
	$conexao = new SQLite3('./banco.db');

	// TER UMA TABELA
	$table = "CREATE TABLE IF NOT EXISTS Clientes (nome TEXT, Bairro TEXT, Rua TEXT, Numero TEXT, celular TEXT);";
	$conexao->exec($table);

	//salvar dados

	$insert = "INSERT INTO Clientes(nome, Bairro, Rua, Numero, celular) VALUES('$nome', '$bairro', '$rua', '$numero', '$celular');"; 
	$conexao->exec($insert);
	
	header("Location: /dashboard", true, 302);
	exit;
}


?> 
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Clientes</title>
</head>
<body>

	<!-- página para que o clientes mande seu endereço -->
	
	<nav>
		<div class="logo">
			<a>Ficha do cliente</a>
		</div>
	</nav>


	<section class="banner">
		<div class="texto">
			<form action="/Clientes" method="POST">

				<label><input type="text" name="nome" placeholder="Nome" required="">Seu nome</label>
				
				<label><input type="text" name="Bairro" placeholder="Digite aqui" required="">Bairro</label>
				
				<label><input type="text" name="Rua" placeholder="Digite aqui" required="">Rua ou loguadouro</label>
				
				<label><input type="text" name="Numero" placeholder="Digite aqui" required="">Número da residência</label>

				<label><input type="text" name="celular" placeholder="(00) 0 0000-0000" required="">Celular</label>
				<br>

				<div class="botoes">
					<a href=""><button class="overlay">Finalizar</button></a>
				</div>

			</form>

		</div>
	</section>

</body>
</html>