<?php 

use Lem\Acai\App\Router;

$router = new Router;

//definir rotas da aplicação

$router->get('/', '/views/homepage.php');
$router->get('/dashboard', '/views/dashboard.php');

$router->get('/register', '/views/acai/register.php');
$router->post('/register', '/views/acai/register.php');

$router->get('/login', '/views/acai/login.php');
$router->post('/login', '/views/acai/login.php');

$router->get('/dashboard', '/views/dashboard.php', true);

$router->post('/logout', '/views/acai/acai.php', true);

$router->post('/usuario','/views/acai/usuario.php');

$router->post('/Opcoes','/views/acai/Opcoes.php', true);
$router->get('/Opcoes','/views/acai/Opcoes.php');

$router->post('/Clientes','/views/acai/Clientes.php');
$router->get('/Clientes','/views/acai/Clientes.php');

$router->post('/funcionario','/views/acai/validarfunc.php');
$router->get('/funcionario','/views/acai/validarfunc.php');

$router->post('/pedidos','/views/acai/pedidos.php');
$router->get('/pedidos','/views/acai/pedidos.php');


return $router;