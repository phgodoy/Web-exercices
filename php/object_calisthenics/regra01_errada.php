<?php
# 1 nivel de identação por metodo
class funcionario{
    var $codigo;
    var $nome;
    var $altura;
    var $pesso;
    var $idade;
    var $nacimento;
    var $escolaridade;
    var $salario;

    public function salario($pagamento){
        #1
        if($this->salario){
            #2
            if($pagamento = 0)
                echo " pessoa nao recebe pagamento";
            #3               
            else
                $this->salario +=$pagamento;    
            
        }
    }


}
?>