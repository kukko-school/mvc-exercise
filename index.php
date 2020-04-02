<?php
session_start();
require_once(__DIR__.'/service/AuthenticationService.php');

$page = isset($_GET['page']) ? $_GET['page'] : (AuthenticationService::isAuthenticated() ? 'Welcome' : 'LoginForm');
$controllerName = $page . 'Controller';
require_once(__DIR__ . '/controller/' . $controllerName . '.php');
$controller = new $controllerName();
echo $controller->run();
