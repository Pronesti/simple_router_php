<?php
require_once("Router.php");

/* $router = new Router();

//$router->addRoute("^p.+", "juan");
$router->addRouteComplex("noticias/:id@numero/fecha/:anio@numero/:mes@numero/:dia@numero", "juan");
print_r($router->match("noticias/123/fecha/2019/02/30"));

 */
$route = "noticias/:id@numero/fecha/:anio@numero/:mes@numero/:dia@numero";
$route = preg_replace("/:(\w+)@numero/", $route, "\d+");
echo $route;
$route = preg_replace("/:(\w+)@palabra/", $route, "\w+");
$route = preg_replace("/:\w+/", "\w+", $route);
$route="#" . $route . "#";