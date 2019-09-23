<?php
# 3 envolver seus tipos primitivos 
class funcionario{
    var $codigo;
    var $nome;
    var $salario;
    var $nacimento;



    public function __construct(string  $nome, string $nacimento){
        $this->nome = $nome;
        $this->nacimento = $nacimento;
    }
}

$pedro = new funcionario('Pedro', '2000-05-05');


//nao conhece a clase
$pedro = new funcionario('Pedro', '05/05/2000');

?>