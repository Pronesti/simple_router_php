<?php
class Router{
    private $book = array();

    function addRoute(String $path, $target){
        $done = false;
        if(!isset($this->book[$path])){
            $this->book[$path] = $target;
            $done = true;
        }
        return $done;
    }
    function match(String $path){
        if(isset($this->book[$path])){
            return $this->book[$path];
        }else{
            return 404;
        }
    }
}