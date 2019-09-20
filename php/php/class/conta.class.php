<?php

abstract class conta{
    var $agencia;
    var $codigo;
    var $data_criacao;
    var $titular;
    var $senha;
    var $saldo;
    var $cancelar;



   function __construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelar){
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->data_criacao = $data_criacao;
        $this->titular = $titular;
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelar = $cancelar;

    }

    abstract function transferir($conta, $valor);
    
  function __destruct(){
        echo "objeto conta{$this->codigo}  finalizada";
  }

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