<?php
class pessoa{
    var $codigo;
    var $nome;
    var $altura;
    var $pesso;
    var $idade;
    var $nacimento;
    var $escolaridade;
    var $salario;

    public function aptidao(){
        if($peso <=50 || $pesso>100  )
            echo"pessoa nao apta";
        else{
            echo"pesssoa apta";
        }    
    }



    function crescer( $crecimento){
        if($crecimento > 0.0 ){
            $this->altura += $crecimento;
        }
    }

    function formar( $formacao){
        $this->escolaridade = $formacao;
    }
    
    function envelhecer($ano){
        if($ano > 0){
            $this->idade = $this->idade +$ano;
        }
    }
}
?>