<?php

use Lem\Acai\Models\User;

//registrando os novos usuario no banco de dados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //SALVAR USUÁRIO E REDIRECIONAR PARA OPCOES
    if (isset($_POST['username'], $_POST['password'])) {

        $user = new User($_POST['username'], $_POST['password']);

        if (!User::exists($_POST['username'], $_POST['password'])) {
            $user->save();

            //registra sessão do usuário
            session_start();
            $_SESSION['user']=$_POST['username'];
            $_SESSION['id']=session_id() . $_POST['username'];

            header("Location: /Opcoes", true, 302);
            exit;
        } else {
            header("Location: /register", true, 302);
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
    <title>Cadastra-se</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     
</head>
<body>


    <nav >
        <div class="logo">
            <a>Registro de usúario</a></div>
        </nav>

<!-- Ao registrar, a senha é criptografada -->

        <section class="banner">
            <div class="texto">

                <form action="/register" method="POST">
                    <input type="text" name="username" placeholder="Digite seu nome" required="">
                    <input type="password" value="password" name="password" placeholder="Digite sua senha" required=""/>
                    <div class="botoes">
                        <a href="/login"><button class="overlay">Enviar</button></a>

                    </div>
                </form>
            </div>
        </section>
        
    </body>
    </html>