<?php
class conta{
    var $agencia;
    var $codigo;
    var $data_criacao;
    var $titular;
    var $senha;
    var $saldo;
    var $cancelar;


    function retirada( $subtrai){
        if($subtrai >0){
        $this->saldo = $this->saldo - $subtrai;
        }
    }

    function depositar( $quantia){
        if($quantia >0){
            $this->saldo = $this->saldo + $quantia;
        }
        
    }

    function obter_saldo(){
        echo "$this->saldo";
        return $this->saldo;
         
    }

    function consultar(){
        echo "<br/>";
        print 'Agencia: '. $this->agencia;
        echo "<br/>";
        print 'Conta: '. $this->codigo;
        echo "<br/>";
        print 'Titular: '. $this->titular;
        echo "<br/>";
        print 'Criada em: '. $this->data_criacao;
        echo "<br/>";
        print 'Saldo:'. $this->saldo;
        echo "<br/>";
        print 'Senha:'. $this->senha;
        echo "<br/>";
        print 'Cancelada:'. $this->cancelar;
    }
}
?>