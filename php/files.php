<?php
//cria arquivo
$fp = fopen("C:\\xampp\htdocs\web\php\Test.txt","w");



//verifica arquivo criado
if(!$fp){
    echo"ERRO AO CRIAR ARQUIVO";
}
else{
    echo"ARQUIVO CRIADO";
}

//escreve no arquivo 
fwrite($fp,"linha1 \n");
fwrite($fp,"linha2 \n");
fwrite($fp,"linha3 \n");

//le o conteudo do aqruivo em string
echo file_get_contents("C:\\xampp\htdocs\web\php\Test.txt");


//fecha arquivo
fclose($fp);
?>