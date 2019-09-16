<?php
include_once 'pessoa.class.php';
include_once 'conta.class.php';

//criaçao do cliente 
$pedro = new pessoa;
$pedro->codigo = 10;
$pedro->nome = "Pedro Henrique";
$pedro->altura = '1.80';
$pedro->idade = 18;
$pedro->nacimento = '12/05/2000';
$pedro->escolaridade = "Ensino superior";

//criaçao da  conta 
$conta_pedro = new conta;
$conta_pedro->agencia = 5245;
$conta_pedro->codigo = "CC.12 34. 56";
$conta_pedro->data_criacao = "10/04/2019";
$conta_pedro->titular = $pedro;
$conta_pedro->senha = 74185296;
$conta_pedro->saldo = 7000;
$conta_pedro->cancelar = false;



echo "manipulando o objeto pessoa: $pedro->nome";
echo"<br/>";
echo "{$pedro->nome} é formado em {$pedro->escolaridade}";
$pedro->formar($formacao = "eng de software");
echo"<br/>";
echo "{$pedro->nome} é formado em {$pedro->escolaridade}";
echo"<br/>";
echo "{$pedro->nome} tem {$pedro->idade} anos e {$pedro->altura} de altura nasceu em: {$pedro->nacimento}";
$pedro->envelhecer(1);
$pedro-> crescer(0.05);
echo"<br/>";
echo "{$pedro->nome} tem {$pedro->idade} anos e {$pedro->altura} de altura e nasceu em: {$pedro->nacimento}";
echo"<br/>";
echo "manipulando a conta do: $pedro->nome";
echo"<br/>";
$conta_pedro->obter_saldo();
echo"<br/>";
$conta_pedro->retirada(5000);
echo"<br/>";
$conta_pedro->obter_saldo();
echo"<br/>";
$conta_pedro->depositar(600);
echo"<br/>";
$conta_pedro->obter_saldo();



?>