<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Essa página aparece sempre que uma rota que não existe ou não foi cadastrada é usada
 -->	<nav >
		<div class="logo">
			<a>ERRO</a>
		</div>
	</nav>

	<section class="banner">
		<div class="texto">
			
			<h1 class="titulo">Essa página não existe: <?php echo $_SERVER['REQUEST_URI']; ?> </h1>

			<div class="botoes"><button class="overlay">Voltar</button></div>

		</div>
	</section>

</body>
</html>