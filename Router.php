<?php
class Router{
    private $book = array();

    function addRoute(String $path, $target){
        if(!isset($this->book[$path])){
            $this->book[$path] = $target;
        }
    }
    function match(String $path){
        if(isset($this->book[$path])){
            return $this->book[$path];
        }else{
            return 404;
        }
    }
}