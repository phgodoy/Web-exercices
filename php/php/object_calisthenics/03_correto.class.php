<?php
class pessoa{
protected $nome;
protected $aniversario;
   

public function __construcao(pessoaNome $nome, pessoaAniversario $aniversario){
    $this->nome = $nome;
    $this->idade = $aniversario;
}
}

$pedro = new pessoa(
    new pessoaNome('Pedro'),
    new pessoaAniversario('2000-05-12')

);

//ou 
//gera Data internamente
$pedro = new pessoa(
    new pessoaNome('Pedro'),
    new pessoaAniversario('12/05/12')
); 


?>