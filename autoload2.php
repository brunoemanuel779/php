<?php
function incluirClasse($nomeclasse){
   if(file_exists($nomeclasse.".php") === true){
       require_once($nomeclasse.".php");
   }
}
spl_autoload_register("incluirClasse");
spl_autoload_register(function ($nomeclasse){
    if(file_exists("abstrata".DIRECTORY_SEPARATOR .$nomeclasse.".php") === true){
       require_once("abstrata".DIRECTORY_SEPARATOR .$nomeclasse.".php");
   }
});
    

$carro = new Delrey();
$carro->acelerar(280);


?>