<?php
include_once 'calss/pessoa.class.php';
include_once 'class/conta.class.php';

//criaçao do cliente 


$pedro = new pessoa(10, "Pedro Henrique", 1.80,80, 18,"12/05/2000", "Ensino superior", 0);

//criaçao da  conta 
$conta_pedro = new conta(5245, "CC.12 34. 56", "10/04/2019", $pedro, 74185296, 7000, false );

/*
$conta_pedro->agencia = 
$conta_pedro->codigo = "CC.12 34. 56";
$conta_pedro->data_criacao = "10/04/2019";
$conta_pedro->titular = $pedro;
$conta_pedro->senha = 74185296;
$conta_pedro->saldo = 7000;
$conta_pedro->cancelar = false;
*/


echo "manipulando o objeto pessoa: $pedro->nome";
echo"<br/>";
echo "{$pedro->nome} é formado em {$pedro->escolaridade}";
$pedro->formar("eng de software");
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
echo"<br/>";



?>