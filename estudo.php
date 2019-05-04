<?php
class Cadastro{
    private $nome;
    private $idade;
    private $sexo;
    
    public function __construct($nome,$idade,$sexo){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->sexo=$sexo;
    }
    public function __toString(){
        return "<br>Nome: ".$this->nome." Idade: ".$this->idade." Sexo: ".$this->sexo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }
}

interface Pessoa{
   public function verificarIdoso();
}

class Idoso extends Cadastro implements Pessoa{
    public function verificarIdoso (){
        if( $this->getIdade() >= 65){
            $mensagem= "<br> Voce é um idoso";
        }
         if( $this->getIdade() >= 18 && $this->getIdade() < 65 ){
            $mensagem= "<br> Voce é um Adulto";
        }else {
            $mensagem= "<br> Voce nao é Adulto";
        }
        return $mensagem;
    }
    
}
 $joao = new Idoso("Joao da silva",25,"Masculino");
 echo $joao;
 echo $joao->verificarIdoso();
?>