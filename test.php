<?php

$texto= "perro gato pajarito
pajarito perro gato
gato perro pajarito";

$out = preg_match_all("/^p.+/",$texto,$matches);

print_r($matches);