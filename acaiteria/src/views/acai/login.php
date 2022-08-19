<?php

use Lem\Acai\App\Application;
use Lem\Acai\App\Http\AcaiMiddleware;
use Lem\Acai\Models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username'], $_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (User::exists($username, $password)) {

            //iniciar sessão
            session_start();
            $_SESSION['user'] = $username;
            $_SESSION['id'] = session_id() . $username;
            header("Location: /Opcoes");
            exit;
        } else {
            header("Location: /login", 302);

            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
   
    <title>Login</title>
</head>
<body>

    <!-- página login para o requisito da atividade -->
    <nav >
        <div class="logo">
            <a>Login</a>
        </div>
    </nav>

    <section class="banner">
        <div class="texto">


            <form action="/login" method="POST">

                <input type="text" name="username" placeholder="Digite seu usuário" required="">
                <input type="password" name="password" placeholder="Digite sua senha" required="">
                
                <div class="botoes"><button class="overlay">Enviar</button>
                    <button class="overlay"> <a href="/register">Registre-se </a></button>
                </div>
            </form>

        </div>
    </section>

</body>
</html>