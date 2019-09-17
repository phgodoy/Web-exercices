<?php
class pessoa{
    var $codigo;
    var $nome;
    var $altura;
    var $pesso;
    var $idade;
    var $nacimento;
    var $escolaridade;
    var $salario;

    public function recebeSalario($pagamento){
        if($pagamento = 0)
                echo " pessoa nao recebe pagamento";
            else
                echo "pessoas recbeu:".$this->salario +=$pagamento; 
            
        
    }



    function crescer( $crecimento){
        if($crecimento > 0.0 ){
            $this->altura += $crecimento;
        }
    }

    function formar( $formacao){
        $this->escolaridade = $formacao;
    }
    
    function envelhecer($ano){
        if($ano > 0){
            $this->idade = $this->idade +$ano;
        }
    }
}
?>