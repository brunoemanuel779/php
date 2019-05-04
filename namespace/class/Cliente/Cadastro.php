<?php

namespace Cliente;
class Cadastro extends \Cadastro{
    public function registrarVenda(){
    return "foi feito uma venda para o cliente ".$this->getNome();
    }
}


?>