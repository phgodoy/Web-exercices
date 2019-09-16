<?php
class pessoa{
    var $codigo;
    var $nome;
    var $altura;
    var $idade;
    var $nacimento;
    var $escolaridade;
    var $salario;


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