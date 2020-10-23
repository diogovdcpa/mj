<?php

namespace app\models;
use app\core\Model;

class Contador {
    public function assinar($sala,$nome){
       $resultado = "Documento assinado pelo contador(a): ".$nome." que trabalha na sala: ".$sala;
       return  $resultado;
    }

    public function lista($sala){
       $lista = "
            01 - Joao <br>
            02 - Pedro <br>
            03 - Judas <br>
        ";
        return $lista;
    }

    public function inserir($contador,$sala){
        $lst = $this->lista($sala)."05 - ".$contador;
        return $lst;
    }
}