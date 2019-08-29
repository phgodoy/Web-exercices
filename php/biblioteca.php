<?php 



//FUNÇOES
function quadrada($numero){
    return $numero * $numero ; 
}

function soma($n1,$n2,$n3){
    return $n1 + $n2 + $n3;
}

//FUNÇAO RECURSIVA 
function fatorial($numero){
    if($numero == 1){
        return $numero;
    }
    else{
        return $numero * fatorial($numero -1);
    }
}


//MANIPULANDO STRINGS


//FOREACH

function futeira(){    
    $frutas = array("maça","melancia","caju","coco");
    foreach($frutas as $value){
        print " - $value    ";
        /*
        print_r($value);
        echo"</br>";
        echo $value;
        */ 
    }
}

 //N ARGUMENTOS
 function foo()
 {
     $numargs = func_num_args();//Retorna o número de argumentos passados para a função
     echo "Numero de  argumentos: $numargs<br />\n";
     if ($numargs >= 2) {
     echo "Segundo argumento e: " . func_get_arg (1)  . "<br />\n";  
     }
     $arg_list = func_get_args(); //Retorna um array contendo uma lista de argumentos da função
     for ($i = 0; $i < $numargs; $i++) {
     echo "Argument $i e: " . $arg_list[$i] . "<br />\n";
     }
 } 
/*livro
function n_argumentos(){
    $argumentos = func_get_args();
    $quantidade = func_num_args();
    for($n = 0; $n<$quantidade; $n+=1){
        echo "Ola".$argumento[$n]."<br>\n";
    }
}*/
?>