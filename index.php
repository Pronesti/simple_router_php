<?php
require_once("Router.php");

$router = new Router();

$router->addRoute("pedrito", "juan");
echo $router->match("pedrito") ."\n";
echo  $router->match("cualquiera") ."\n";
$router->addRoute("pedrito", "pablo");
echo $router->match("pedrito") ."\n";