<?php 

function autochargement($nomClass){

    include_once $nomClass . '.php';

}

spl_autoload_register('autochargement');

$foo = new Foo;
$bar = new Bar;

echo $foo->propriete;