<?php
//inclui classes
  include_once 'produlto.class.php';
  
  //cria objetos 
   $produlto1 = new Produlto;
   $produlto2 = new Produlto;
 

//atribuir valores 
$produlto1->codigo = 4001;
$produlto1->descricao = 'DVD-Nada';

$produlto2->codigo = 4002;
$produlto2->descricao = 'CD - The Eagles Hotel California';


$produlto1->imprime_etiqueta();
$produlto2->imprime_etiqueta();
?>