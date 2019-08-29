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

 //substr separa sting
function res(){
    $res =  substr("AMERICA",1);
    echo $res."</br>";
    $res =  substr("AMERICA",1,4);
    echo $res."</br>";
    $res =  substr("AMERICA",-2);
    echo $res."</br>";

}

function best(){
    $text = "THE BEST";
    print str_pad($text,20)."\n";//concatena string
    echo "</br>";
    print str_pad($text,20,"*",STR_PAD_LEFT)."\n";
    echo "</br>";
    print str_pad($text,20,"*",STR_PAD_BOTH)."\n";
    echo "</br>";
    print str_pad($text,20,"*")."\n";
    echo "</br>";
    print strlen($text); //comprimento da string
    echo "</br>";
    print str_replace('BEST', 'BAD', $text)."\n"; //substitui string 
    echo "</br>";
}



?>