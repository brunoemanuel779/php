<?php
 class Documento{
     private $numero;
     
     public function getNumero(){
         return $this->numero;
     }
     public function setNumero($numero){
         $this->numero=$numero;
     }
 }
class CPF extends Documento{
    public function validar():bool{
        
        $this->getNumero();
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("43780590883");
$doc->validar();
var_dump($doc->validar());
echo $doc->getNumero();

?>