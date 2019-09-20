<?php
class conta_corrent extends conta{
    var $limite;
    var $taxa_transferencia =2.5; 
    function __construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelar, $limite){
        parent::__construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelar );
            $this->limite = $limite;
        
    }

    function retirada($quantia){
         $cpmf = 0.05;

        if(($this->saldo + $this->limite)>= $quantia){
            parent:: retirada($quantia);

            parent:: retirada($quantia * $cpmf);
        }
        else{
            echo"<br/>";
            echo "Retirada nao permitida! ";
            echo"<br/>";
        }
        return true;
    }

    final function transferir($cota, $valor){
       
            if($this->retirada($valor)){
                $conta->depositar($valor);
            }
            if($this->titular != $conta->titular){
                $this->retirada($this->taxa_transferencia);
            }
        
    }

    
}
?>