<?php
# 9 Nao usar get e set

class pessoa{
    var $nome;
}

class funcionario{
    var $codigo;
    var $salario;

    public setfuncionario($codigo){
        $this->codigo = $codigo;
    }
    
    public getfuncionario(){
        return $codigo;
    }
    
    public function __construct(FuncionarioNome   $nome, FuncionarioCodigo $codigo )
    {
        $this->nome = $nome;
       $this->codigo = $codigo;
    }
    
    public function registro($registro){
        if($this->codigo == $registro)
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