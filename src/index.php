<?php
$controller = ucfirst(strtolower($_REQUEST['ctrl'] ?? 'Home') . 'Controller');
$action = $_REQUEST['act'] ?? 'index';
require './app/controllers/' . $controller . '.php';
$controllerObject = new $controller();
$controllerObject->$action();
