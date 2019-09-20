<?php
include_once 'class/conta.class.php';
include_once 'class/conta_corrente.class.php';

class  conta_corrent_especial extends conta_corrent{
    function deposita($valor){
        echo"sobrescreve metodo transferir";
        parent::transferir($conta, $valor);
    }
}

?>