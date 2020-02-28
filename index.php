<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'LoginForm';
$controllerName = $page . 'Controller';
require_once(__DIR__ . '/controller/' . $controllerName . '.php');
$controller = new $controllerName();
echo $controller->run();
