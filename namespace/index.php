<?php 

require_once("config.php");
use Cliente\Cadastro;
$cad= new Cadastro();
$cad->setNome("Bruno Emanuel");
$cad->setEmail("brunoemanuel779@gmail.com");
$cad->setSenha("46765503");

echo $cad->registrarVenda();

?>