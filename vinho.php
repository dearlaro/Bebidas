<?php
require_once  'bebida.php';

class Vinho extends Bebida{
    private $safra;
    private $tipo;

    public function getSafra(){
        return $this->safra;
    }
    public function setSafra($safra){
        $this->safra = $safra;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function mostrarBebida(){
        echo "Nome: ".$this->getNome()." Preço: ".$this->getPreco()." Safra: ".$this->safra." Tipo: ".$this->tipo;
    }

    public function verificarPreco(){
        $retorno = true;
        if($this->getPreco() < 25){
            $retorno = true;
            return $retorno;
        }
        else{
            $retorno = false;
            return $retorno;
        }
    }
}