<?php
class conta_poupanca extends conta
{
    var $aniversario;
    function __construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelar, $aniversario){
        parent::__construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelar);
            $this->aniversario = $aniversario;
        
    }


    function retira($quantia){
        if($this->saldo >= $qunatia){
            parent::retira($quantia);
            return true;
        }
        echo"<br/>";
        echo "Retirada nao permitida! ";
        echo"<br/>";

    }
    
}
?>