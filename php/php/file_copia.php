<?php
function copiar(){
    $origem = "C:\\xampp\htdocs\web\php\Test.txt";
    $destino= "C:\\xampp\htdocs\web\php\Test2.txt";
    if (copy($origem, $destino))
    {
        echo "Cópia efetuada";
    }
    else{
        echo "Cópia não efetuada";
    }
}

function ler(){
    //lê o arquivo para o array $arquivo
    $arquivo = file ("C:\\xampp\htdocs\web\php\Test.txt");
    //le exibe o conteúdo
    echo $arquivo[0];
    echo $arquivo[l];
    echo $arquivo[2];
    }

  function apaga(){
    $arquivo= "C:\\xampp\htdocs\web\php\Test.txt";
        if (unlink($arquivo))
        {
            echo "Arquivo apagado";
        }   
        else{
            echo "Arquivo não apagado";
        } 
    }

?>