<?php
class produlto{
    var $codigo;
    var $descricao;
    var $preco;
    var $quantidade;


    function imprime_etiqueta(){
        print 'Codigo: '. $this->codigo."\n";
        echo "<br/>";
        print 'Descrição: '. $this->descricao."\n";
        echo "<br/>";
        
    }
}
?>