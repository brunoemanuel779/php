<?php
class Carro{
    private $modelo;
    private $motor;
    private $ano;
    
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getMotor():float{
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor=$motor;
    }
    public function getAno():int{
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano=$ano;
    }
    public function exibir(){
     return array(
     'nomecampo'=>$this->getModelo(),
         'nomecampo'=>$this->getMotor(),
           'nomecampo'=>$this->getAno()
     );
        
    
    }
}

$celta = new Carro();
$celta->setModelo("Celta");
$celta->setMotor("1.5");
$celta->setAno("2012");

print_r($celta->exibir());
?>