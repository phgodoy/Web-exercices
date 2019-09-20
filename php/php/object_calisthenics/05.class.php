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

    public function getCodigo($id){
        $this->codigo = $id;
    }
    
    public function recebeSalario($pagamento){
        if($this->salario){
            if($pagamento = 0)
                echo " pessoa nao recebe pagamento";
            else
                $this->salario +=$pagamento;    
            
        }
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



$pedro = new pessoa();
$pedro -> getCodigo()
       -> crescer(0.5);
       -> envelhecer(5);
?>