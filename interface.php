<?php

 interface Veiculo{
     public function acelerar($velocidade);
     public function freiar($velocidade);
     public function trocarMarcha($marcha);
 }
 class Civi implements Veiculo{
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

$carro = new Civi();
$carro->acelerar(545);
$carro->freiar(100);
$carro->trocarMarcha(5);

?>