<?php
#nao use else
class funcionario{
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
}
?>