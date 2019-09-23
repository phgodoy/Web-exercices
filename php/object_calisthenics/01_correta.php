<?php
# 1 nivel de identação por metodo
class funcionario{
    var $codigo;
    var $nome;
    var $salario;
    var $nacimento;


    public function salario($pagamento){
     
        if($pagamento = 0){
            echo " pessoa nao recebe pagamento";
        }
            $this->salario +=$pagamento;    
            
    }
}



?>