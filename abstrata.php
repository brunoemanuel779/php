<?php

interface Veiculo{
     public function acelerar($velocidade);
     public function freiar($velocidade);
     public function trocarMarcha($marcha);
 }
 abstract class Automovel implements Veiculo{
     public function acelerar($velocidade){
         echo "O veiculo acelerou até ".$velocidade." km/h <br>"; 
     }
     public function freiar($velocidade){
         echo "O veiculo freiou até ".$velocidade. " km/h <br>";
     }
     public function trocarMarcha($marcha){
         echo "o veiculo engatou a marcha ".$marcha;
     }
 }  
 class Delrey extends Automovel{
     public function empurrar(){
         
     }
 }

$carro = new Delrey();
$carro->acelerar(280);
?>