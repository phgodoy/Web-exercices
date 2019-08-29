<?php   
    //STATC = MANTEN O VALOR 
    static $total;
    $total += $quilometras;
    echo "percorreu mais $quilometras do total de $total\n";
    
    percorre(100);
    percorre(200);
    percorre(50);

 ?>   