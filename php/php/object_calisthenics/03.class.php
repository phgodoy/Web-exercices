<?php
class pessoa{
protected $nome;
protected $aniversario;
   

//força atributo como string na entrada 
public function __construcao(strig $nome, string $aniversario){
    $this->nome = $nome;
    $this->idade = $aniversario;
}
}

$pedro = new pessoa('Pedro', '2000-05-12');

//ou 
//gera um 0000-00-00 no banco de dados

$pedro = new pessoa('Pedro', '12/05/12');

?>