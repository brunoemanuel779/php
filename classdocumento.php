<?php
class Documento {
    private $numero;
    
     public function getNumero():int{
     return $this->numero;
     } 
     public function setNumero($numero){
      $this->numero=$numero;
     }
    
}
$cpf = new Documento();
$cpf->setNumero("43780590883");
var_dump($cpf->getNumero());


?>