<?php

    //verifica se arquivos ou diretorios existem

    $arq = "C:\\xampp\htdocs\web\php";
    $arq2 = "C:\\xampp\htdocs\web\phtml";

    if(file_exists($arq)){
        echo "Diretorio: $arq  existente\n";
    }
    else{
        echo "Diretorio: $arq \n nao existe";
    }

    echo"</br>";

    if(file_exists($arq2)){
        echo "Diretorio $arq2 \n existente";
    }
    else{
        echo "Diretorio:$arq2 \n nao existe";
    }
?>