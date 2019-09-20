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


    function __construct($codigo, $nome, $altura, $pesso, $idade,  $nacimento,  $escolaridade, $salario){

        echo"qualquer coisa";
        $this->codigo = $codigo;
        echo $nome."<br/>";
        $this->nome = $nome;
        $this->altura = $altura;
        $this->pessoa = $pesso;
        $this->idade = $idade;
        $this->nascimento = $nacimento;
        $this->escolaridade = $escolaridade;
        $this->slario = $salario;
    }

    function __destruct(){
        echo "objeto{$this->nome}finalizado;...\n";
    }
    
   function recebeSalario($pagamento){
        if($this->salario){
            if($pagamento = 0)
                echo " pessoa nao recebe pagamento";
            else
                $this->salario +=$pagamento;    
            
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