<?php
require_once  'bebida.php';

class Suco extends Bebida{
    private $sabor;

    public function getSabor(){
        return $this->sabor;
    }
    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function mostrarBebida(){
        echo "Nome: ".$this->getNome()." Preço: ".$this->getPreco()." Sabor: ".$this->sabor;
    }

    public function verificarPreco(){
        $retorno = true;
        if($this->getPreco() < 2.5){
            $retorno = true;
            return $retorno;
        }
        else{
            $retorno = false;
            return $retorno;
        }
    }
}