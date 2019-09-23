<?php
# 3 envolver seus tipos primitivos 
class funcionario{
    var $codigo;
    var $nome;
    var $salario;
    var $nacimento;

    public function __construct(FuncionarioNome $nome, FuncionarioNacimento $nacimento){
        $this->nome = $nome;
        $this->nacimento = $nacimento;
    }
}

$pedro = new funcionario(
    new FuncionarioNome('Pedro'),
    new FuncionarioNacimento('2000-05-05')
);

//nao conhece a clase
$pedro = new funcionario(
    new FuncionarioNome('Pedro'),
    new FuncionarioNacimento('05/05/2000')
);

?>

