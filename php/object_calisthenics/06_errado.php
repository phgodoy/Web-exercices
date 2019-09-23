<?php
#  6  nao abreviar
class funcionario{
    var $codigo;
    var $nome;
    var $salario;
    
    public function __construct(FuncionarioNome   $nome, FuncionarioCodigo $codigo ){
        $this->nome = $nome;
        $this->codigo = $codigo;
    }
    #abreviação do nome de metodos e de variaveis
    public function reg($reg){
        if($this->codigo == $reg)
            echo "esta na empresa";
    }

    public function salario($pagamento){
     
        if($pagamento = 0){
            echo " pessoa nao recebe pagamento";
        }
            $this->salario +=$pagamento;    
            
    }

}

?>