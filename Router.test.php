<?php
require_once("./vendor/autoload.php");
require_once("Router.php");
use PHPUnit\Framework\TestCase;

class TestRouter extends TestCase{
    function testExisteAddRoute(){
        $router = new Router();
        $this->assertTrue(
            method_exists(new Router, 'addRoute'), 
            'Class does not have method myFunction'
          );
    }
    function testExisteMatch(){
        $router = new Router();
        $this->assertTrue(
            method_exists(new Router, 'match'), 
            'Class does not have method myFunction'
          );
    }
    function testAddsRouteAndMatches(){
        $router = new Router();
        $router->addRoute("1","2");
        $res = $router->match("1");
        $this->assertSame("2", $res);
    }

    function testAddsTwoRoutesAndMatchesBoth(){
        $router = new Router();
        $router->addRoute("1","2");
        $router->addRoute("2","3");
        $res = $router->match("1");
        $res2 = $router->match("2");
        $this->assertSame("2", $res);
        $this->assertSame("3", $res2);
    }

    function testAddsTwoRoutesWithSamePathAndMatchesFirst(){
        $router = new Router();
        $router->addRoute("1","2");
        $router->addRoute("1","3");
        $res = $router->match("1");
        $this->assertSame("2", $res);
    }

    function testFailMatch(){
        $router = new Router();
        $res = $router->match("1");
        $this->assertSame(404, $res);
    }



}