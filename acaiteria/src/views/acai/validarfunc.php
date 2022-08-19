<?php

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    //PROCESSAR A SENHA

    $senha = $_POST['funcsenha'];

    if ( $senha === '5008') {
        //mostrar a pedidos
            header("Location: /pedidos");
                exit;

    }else{

        //redirecionar para a pagina de funcionario
        header("Location: /funcionario");

    }

    exit;

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Validar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Login especial para que os funcionarios acessem os pedidos do site -->
      <nav >
        <div class="logo">
            <a>Login dos funcionários</a>
        </div>
    </nav>

    <section class="banner">
        <div class="texto">

	<form action="/funcionario" method="POST">
		<input type="password" name="funcsenha" placeholder="Senha" required="">
		 <div class="botoes"><button class="overlay">Enviar</button></div>
	</form>

</div>
</section>

</body>
</html>