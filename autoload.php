<?php
function __autoload($nomeclasse){
    var_dump($nomeclasse);
    require_once("$nomeclasse.php");
    
}
$carro = new delrey();
$carro->acelerar(280);
?>