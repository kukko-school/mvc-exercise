<?php
session_start();
require_once(__DIR__ . '/autoloader.php');

$page = isset($_GET['page']) ? $_GET['page'] : (AuthenticationService::isAuthenticated() ? 'Welcome' : 'LoginForm');
$controllerName = 'Controller\\' . $page . 'Controller';
$controller = new $controllerName();
echo $controller->run();
