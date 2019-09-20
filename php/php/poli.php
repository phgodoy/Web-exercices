<?php
#carrega classes
include_once 'class/pessoa.class.php';
include_once 'class/conta.class.php';
include_once 'class/conta_corrente.class.php';
include_once 'class/conta_poupanca.class.php';

#criacao do objeto pessoa
$pedro = new pessoa(11, "Pedro Henrique", 1.78, 80, 19, "12/05/2019", "eng de software", 0);

#manipulando o objeto pessoa
$conta[1] = new conta_corrent(829122, "CC.1234.56", "12/08/2019", $pedro, 12345, 5000, false, 8000);
$conta[2] = new conta_poupanca(829123, "PP.1236.56", "12/08/2019", $pedro, 12345, 5000, false, "10/07");


#percorrer as contas 

foreach($conta as $key => $conta){
    echo"<br/>";
    echo"Manipulando a conta  $key de: {$conta->titular->nome}: \n";
    echo"<br/>";
    echo "O Sald atual da conta $key é: {$conta->obter_saldo()}: \n";
    echo"<br/>";
    $conta->depositar(200);
    echo "O Sald atual da conta $key é: {$conta->obter_saldo()}: \n";
    echo"<br/>";
    $conta->retirada(100);
    echo "O Sald atual da conta $key é: {$conta->obter_saldo()}: \n";
    echo"<br/>";

}

?>