<?php
require_once  'bebida.php';

class Refrigerante extends Bebida{
    private $retornavel;

    public function getRetornavel(){
        return $this->retornavel;
    }
    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function mostrarBebida(){
        echo "Nome: ".$this->getNome()." Preço: ".$this->getPreco()." Retornável: ".$this->retornavel;
    }

    public function verificarPreco(){
        $retorno = true;
        if($this->getPreco() < 5){
            $retorno = true;
            return $retorno;
        }
        else{
            $retorno = false;
            return $retorno;
        }
    }
}